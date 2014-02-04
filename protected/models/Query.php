<?php

class Query extends CModel {

	/** @var string The path where the SQL queries are.  */
	private static $baseQueryPath;
	
	/** @var boolean Whether the initialize() function has been called. */
	private static $initialized = false;
	
	/** @var Query[] An array with all 10 queries. */
	private static $queries;
	
	public $id,
			$title,
			$brief,
			$sql,
			$params;
	
	/**
	 * @brief Contructor
	 * @param int $id The id of this object.
	 * @param string $sql The SQL query of this object.
	 */
	function __construct($id, $sql) {
		//print "In Query constructor\n";
		//if (Query::$initialized==false)
		//	Query::initialize();
		$this->id= $id;
		//$this->title= $title;
		$this->sql= $sql;
	}
	
	public static function initialize() {
		Query::$initialized= true;
		Query::$baseQueryPath = dirname(__FILE__) . DIRECTORY_SEPARATOR .
				//'..' . DIRECTORY_SEPARATOR .
				//'..' . DIRECTORY_SEPARATOR .
				'..' . DIRECTORY_SEPARATOR .
				"data" . DIRECTORY_SEPARATOR . "queries" . DIRECTORY_SEPARATOR;
		Query::$queries = array();
		for ($i = 0; $i < 10; $i++) {
			$sql= file_get_contents(Query::$baseQueryPath . 'q' . ($i+1) . '.sql');
			Query::$queries[$i]= new Query(($i+1), $sql);
			
			// Set title
			$title= explode('@title ', Query::$queries[$i]->sql);
			$title = isset($title[1]) ? $title[1] : "Query";
			$title= explode("\n *", $title);
			$title = isset($title[0]) ? $title[0] : "Query";
			$title= str_replace(" * ", " ", $title);
			Query::$queries[$i]->title= $title;
			
			// Set brief description
			$brief= explode('@brief ',Query::$queries[$i]->sql);
			$brief = isset($brief[1]) ? $brief[1] : "[Description]";
			$brief= explode("\n *\n", $brief);
			$brief= str_replace(" * ", " ", $brief);
			$brief = isset($brief[0]) ? $brief[0] : "[Description]";
			Query::$queries[$i]->brief= $brief;
			
			// Set param names
			$params_doc= explode('@param ', Query::$queries[$i]->sql);
			for ($j=1; $j<count($params_doc); $j++) {
				$param_doc = $params_doc[$j];
				$param_doc = explode(' *', $param_doc);
				$param_doc = isset($param_doc[0]) ? $param_doc[0] : "[param]";
				$param_doc = explode(': ', $param_doc);
				$param_doc_desc="";
				if (count($param_doc)>1)
					$param_doc_desc= $param_doc[1];
				$param_doc= $param_doc[0];
				Query::$queries[$i]->params[$param_doc]=$param_doc_desc;
			}
		}
		
		// Define parameters
		// TODO: parse params from SQL doc, above, inside the initialize loop
		//Query::$queries[0]->params=array(":party_name"=>"ΝΔ");
		//Query::$queries[2]->params=array(":parliament_cycle_title" => "ΙE' Βουλευτική Περίοδος");
		
	}
	
	/**
	 * Searches for a specific query, by its id.
	 * @param type $id The id to search for.
	 * @return type The query, if found, or null.
	 */
	public static function findById($id) {
		foreach (Query::$queries as $query) {
			if ($query->id == $id) {
				return $query;
			}
		}
		return null;
	}
	
	/**
	 * Returns all queries.
	 * @return Query[] Array of all query objects.
	 */
	public static function findAll() {
		return Query::$queries;
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('title', $this->title);
		$criteria->compare('brief', $this->brief);
		$criteria->compare('sql', $this->sql);
		$criteria->compare('params', $this->params);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	public function attributeNames() {
		return array(
			'id',
			'title',
			'brief',
			'sql',
			'params',
		);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('app','model.query.id'),
			'title' => Yii::t('app','model.query.title'),
			'brief' => Yii::t('app','model.query.brief'),
			'sql' => Yii::t('app','model.query.sql'),
			'params' => Yii::t('app','model.query.params'),
		);
	}

}

?>

/*
 * @title Minister details for a specific government
 * @brief Retrieves the names, occupations and portfolio subjects of the ministers of a specific gonvenment. 
 *
 * @param start_timestamp: The start of the government duty.
 * @param end_timestamp: The end of the government duty.
 */
SELECT 
    p.name AS minister_name,
    IFNULL(o.occupation,"NA") AS occupation,
	o.subject AS occupation_subject,
    x.subject AS portfolio_subject
FROM persons p  
RIGHT JOIN ministers u ON p.person_id=u.person_id 
LEFT JOIN persons_occupations o ON o.person_id=p.person_id
LEFT JOIN portfolios x ON x.minister_id=u.minister_id
/*
TODO:
WHERE
	parliament_cycles.start_timestamp = :start_timestamp
	AND parliament_cycles.end_timestamp = :end_timestamp
 */

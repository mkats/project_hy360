/*
 *  Query 10
 *  
 *  @params = parliament cycle id
 *
*/

SELECT tmp.name
FROM (
    SELECT 
    	persons.name, 
    	count(interpellations.category) AS categories_asked
    FROM interpellations
    LEFT JOIN mps ON interpellations.mp_id = mps.mp_id
    LEFT JOIN persons ON persons.person_id = mps.person_id
    GROUP BY persons.name
    ORDER BY persons.name
) AS tmp
WHERE tmp.categories_asked = 5

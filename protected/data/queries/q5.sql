/*
*   Query 5
*
*   @param : timestamp of government( parliament cycle start-end) 
*/

SELECT p.name
FROM persons p
RIGHT JOIN ministers u ON p.person_id=u.person_id
LEFT JOIN persons_occupations o ON o.person_id=p.person_id
LEFT JOIN portfolios x ON x.minister_id=u.minister_id
WHERE o.subject=x.subject
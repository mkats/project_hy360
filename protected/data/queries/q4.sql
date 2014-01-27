/*
*   Query 4
*
*   @param : timestamp of government( parliament cycle start-end) 
*/

SELECT 
    p.name AS minister_name,
    IFNULL(o.occupation,"NA") AS minister_occupation,
    x.subject AS portfolio_subject
FROM persons p  
RIGHT JOIN ministers u ON p.person_id=u.person_id 
LEFT JOIN persons_occupations o ON o.person_id=p.person_id
LEFT JOIN portfolios x ON x.minister_id=u.minister_id
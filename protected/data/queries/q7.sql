/*
*   Query 7
*   
*   @param : timestamp of government( parliament cycle start-end) 
*/

SELECT /*p.name,*/ IFNULL(e.constituency,"NA") AS constituency
FROM ministers u
LEFT JOIN persons p ON u.person_id=p.person_id
LEFT JOIN mps v ON v.person_id=p.person_id
LEFT JOIN elected e ON v.mp_id=e.mp_id
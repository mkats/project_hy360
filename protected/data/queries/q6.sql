/*
*   Query 6
*
*   @param : specific parliament cycle id
*/

SELECT 
    p.name,
    e.independence_timestamp
FROM persons p
LEFT JOIN mps v ON v.person_id=p.person_id
LEFT JOIN elected e ON v.mp_id=e.mp_id
WHERE e.independence_timestamp <> '0000-00-00 00:00:00'
    AND e.parliament_cycle_id = ?
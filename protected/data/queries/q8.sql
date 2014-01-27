/*
*   Query 8 B
*
*   @params = parliament cycle id
*/

SELECT i.description , i.category
FROM interpellations i
LEFT JOIN parliament_sessions s ON s.parliament_session_id=i.parliament_session_id
ORDER BY s.timestamp DESC
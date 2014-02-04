/*
 * @title Number of interpellations during a parliament cycle.
 * @brief Retrieves the interpellations submitted during a specific parliament cycle.
 *
 * @param parliament_cycle_id: The specific parliament cycle id.
 */
SELECT
	i.category,
	i.description
FROM interpellations i
LEFT JOIN parliament_sessions s ON s.parliament_session_id=i.parliament_session_id
LEFT JOIN parliament_cycles pc ON pc.parliament_cycle_id = s.parliament_cycle_id
WHERE pc.parliament_cycle_id = :parliament_cycle_id
ORDER BY s.timestamp DESC
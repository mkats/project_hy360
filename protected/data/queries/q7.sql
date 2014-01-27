/*
 * @title Consituency of Ministers
 * @brief Retrieves the consituency from which the Ministers are elected (or 'NA', in case they are not elected MPs).
 *
 * @param start_timestamp: The start of the government duty.
 * @param end_timestamp: The end of the government duty. 
 */
SELECT
	p.name,
	IFNULL(e.constituency,"NA") AS constituency
FROM ministers u
LEFT JOIN persons p ON u.person_id=p.person_id
LEFT JOIN mps v ON v.person_id=p.person_id
LEFT JOIN elected e ON v.mp_id=e.mp_id
/*
TODO:
WHERE
	parliament_cycles.start_timestamp = :start_timestamp
	AND parliament_cycles.end_timestamp = :end_timestamp
 */
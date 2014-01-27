/*
 * @title Ministers with common portfolio and occupation subject
 * @brief Retrieves the ministers whose portfolio and occupation have the same subject.
 *
 * @param start_timestamp: The start of the government duty.
 * @param end_timestamp: The end of the government duty.
 */

SELECT
	p.name AS minister_name,
	x.subject AS subject
FROM persons p
RIGHT JOIN ministers u ON p.person_id=u.person_id
LEFT JOIN persons_occupations o ON o.person_id=p.person_id
LEFT JOIN portfolios x ON x.minister_id=u.minister_id
WHERE o.subject=x.subject
/*
TODO:
WHERE
	parliament_cycles.start_timestamp = :start_timestamp
	AND parliament_cycles.end_timestamp = :end_timestamp
 */
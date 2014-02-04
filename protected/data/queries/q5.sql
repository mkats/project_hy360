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
LEFT JOIN minister_participates_government mpg ON mpg.minister_id = u.minister_id
LEFT JOIN governments gov ON gov.government_id = mpg.government_id
LEFT JOIN parliament_cycles pc ON pc.parliament_cycle_id = gov.parliament_cycle_id
WHERE o.subject=x.subject AND pc.start_timestamp = :start_timestamp AND pc.end_timestamp = :end_timestamp
/*
 * @title Minister details for a specific government
 * @brief Retrieves the names, occupations and portfolio subjects of the ministers of a specific gonvenment. 
 *
 * @param start_timestamp: The start of the government duty.
 * @param end_timestamp: The end of the government duty.
 */
SELECT 
    p.name AS minister_name,
    IFNULL(o.occupation,"NA") AS occupation,
	o.subject AS occupation_subject,
    x.subject AS portfolio_subject
FROM persons p  
RIGHT JOIN ministers u ON p.person_id=u.person_id 
LEFT JOIN persons_occupations o ON o.person_id=p.person_id
LEFT JOIN portfolios x ON x.minister_id=u.minister_id
LEFT JOIN minister_participates_government mpg ON mpg.minister_id = u.minister_id
LEFT JOIN governments gov ON gov.government_id = mpg.government_id
LEFT JOIN parliament_cycles pc ON pc.parliament_cycle_id = gov.parliament_cycle_id
WHERE
    pc.start_timestamp = :start_timestamp AND pc.end_timestamp = :end_timestamp

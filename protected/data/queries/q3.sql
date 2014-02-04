/*
 * @title Ministers of a specific Parliament Cycle
 * @brief Retrieves the ministers that participate in government during a
 * specific Parliament Cycle, and the party at which they belong, in case they
 * are also elected MPs, or 'NA' otherwise.
 *
 * @param parliament_cycle_title: The specific parliament cycle title
 */
SELECT
    p.name, 
    IFNULL( k.name, "NA"  ) AS party
FROM persons p
LEFT JOIN mps v ON p.person_id=v.person_id
LEFT JOIN belongs b ON v.mp_id=b.mp_id
LEFT JOIN parties k ON k.party_id=b.party_id
RIGHT JOIN ministers u ON p.person_id=u.person_id
LEFT JOIN minister_participates_government mpg ON mpg.minister_id=u.minister_id
LEFT JOIN governments ON governments.government_id=mpg.government_id
LEFT JOIN parliament_cycles pc ON pc.parliament_cycle_id=governments.parliament_cycle_id
WHERE
	pc.title = :parliament_cycle_title
	/*Below: uncomment to select only the ones currently in government*/
	/*AND (mpg.end_timestamp="0000-00-00 00:00:00" OR mpg.end_timestamp > NOW())*/
ORDER BY p.name ASC
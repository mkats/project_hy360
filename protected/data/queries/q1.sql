/**
 * @title MPs of a specific party
 * @brief Returns the MPs who belong to a specific party, their constituency and
 * occupation, ordered by descending alphabetical name order.
 *
 * @param party_name: The specific party where the retrieved MPs belong.
 */
SELECT
    p.name, 
    e.constituency, 
    p.sex, 
    o.occupation,
	parties.name AS party
FROM mps v
LEFT JOIN persons p ON v.person_id=p.person_id
LEFT JOIN persons_occupations o ON o.person_id=p.person_id
LEFT JOIN elected e ON e.mp_id=v.mp_id
LEFT JOIN belongs b ON b.mp_id=v.mp_id
LEFT JOIN parties ON parties.party_id=b.party_id
WHERE (b.end_timestamp IS NULL OR b.end_timestamp < NOW())
	AND parties.name = :party_name
ORDER BY p.name DESC, e.constituency ASC, p.sex DESC, o.occupation ASC
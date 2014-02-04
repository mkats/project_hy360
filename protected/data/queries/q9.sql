/*
 * @title MPs with maximum number of submitted interpellations
 * @brief Retrieves the names of the MPs who have submitted the maximum observed number of interpellations, and the party where they belong.
 *
 * @param parliament_cycle_id: The specific parliament cycle id
 *
 */
SELECT
    mp_name, 
    party_name, 
    times_asked
FROM (	
	SELECT
		persons.name AS mp_name,
        parties.name AS party_name,
		count(i.interpellation_id) AS times_asked,
		(
			SELECT
				count(interpellations.interpellation_id) AS max_count_i
			FROM interpellations
			LEFT JOIN mps ON interpellations.mp_id=mps.mp_id
			LEFT JOIN persons ON mps.person_id=persons.person_id
            GROUP BY persons.name
			ORDER BY max_count_i DESC
			LIMIT 1
		) AS max_count_i
	FROM interpellations i
	LEFT JOIN mps ON i.mp_id=mps.mp_id
	LEFT JOIN persons ON mps.person_id=persons.person_id
    LEFT JOIN belongs b ON mps.mp_id=b.mp_id
    LEFT JOIN parties ON b.party_id=parties.party_id
    LEFT JOIN parliament_sessions ps ON ps.parliament_session_id= i.parliament_session_id
    LEFT JOIN parliament_cycles pc ON ps.parliament_cycle_id = pc.parliament_cycle_id
    WHERE
        pc.parliament_cycle_id = :parliament_cycle_id
        /* Using the 'GROUP BY' clause we want a row for every <mp,party> combination submitted interpellations */
        /* Using the conditions below we count only the interpellations submitted while the mp belonged to a specific party */
        AND (b.start_timestamp < ps.timestamp OR b.start_timestamp="0000-00-00 00:00:00")
        AND (ps.timestamp < b.end_timestamp OR b.end_timestamp="0000-00-00 00:00:00")
	GROUP BY persons.name, parties.name
	ORDER BY persons.name
) AS mps_n_intepelations
WHERE times_asked=max_count_i
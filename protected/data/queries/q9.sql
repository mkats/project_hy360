/*
 * @title MPs with maximum number of submitted interpellations
 * @brief Retrieves the names of the MPs who have submitted the maximum observed number of interpellations, and the party where they belong.
 *
 * @param parliament_cycle_id: The specific parliament cycle id
 * 
 * PS : if the mp has changed party we should show in which party he belonged
 * when he asked.
 *
 * Προσοχή εδώ μια επερώτηση μπορεί να έχει γίνει από βουλευτή ο οποίος άλλαξε
 * κόμμα κατά την διάρκεια της βουλευτικής περιόδου. Οπότε πρέπει να λάβετε
 * υπόψη σας την χρονολογία πότε έκανε την επερώτηση και σε ποιό κόμμα ανήκει σε
 * αυτή τη χρονολογία.
 * 
 *  Correct result
 *  ΒΑΣΙΛΗΣ ΟΙΚΟΝΟΜΟΥ           2
 *  ΟΔΥΣΣΕΑΣ ΚΩΝΣΤΑΝΤΙΝΟΠΟΥΛΟΣ 	2
 *  ΘΕΟΔΟΣΙΟΣ ΚΩΝΣΤΑΝΤΙΝΙΔΗΣ 	2
 *  ΑΠΟΣΤΟΛΟΣ ΚΑΚΛΑΜΑΝΗΣ 	2
 *  ΔΗΜΗΤΡΗΣ ΑΝΑΓΝΩΣΤΑΚΗΣ 	2
 */
SELECT
    mp_name, 
    party_name, 
    times_asked
FROM (	
	SELECT
		persons.name AS mp_name,
                parties.name AS party_name,
		count(interpellations.interpellation_id) AS times_asked,
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
	FROM interpellations
	LEFT JOIN mps ON interpellations.mp_id=mps.mp_id
	LEFT JOIN persons ON mps.person_id=persons.person_id
        LEFT JOIN belongs ON mps.mp_id=belongs.mp_id
        LEFT JOIN parties ON belongs.party_id=parties.party_id
	GROUP BY persons.name
	ORDER BY persons.name
) AS mps_n_intepelations
WHERE times_asked=max_count_i
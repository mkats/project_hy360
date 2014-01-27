/*
 * @title Male vs female MP ratio
 * @brief Returns the percentage of male and female MPs, per party and per constituency, for a specific parliament cycle. 
 *
 * @param parliament_cycle_id: The specific parliament cycle.
 */

SELECT
	constituency,
	name,
	IFNULL( MAX(male_percentage), 0) AS male_percentage,
	IFNULL( MAX(female_percentage), 0) AS female_percentage
FROM(
	/*  
	*   Part 1  
	*   Gets all female records and male records, based on contituency and name, and makes LEFT JOIN.
	*/
    SELECT
        female.constituency,
        female.name,
        male.male_percentage,
        female.female_percentage
    FROM(
        SELECT
        e.constituency,
        k.name,
        count(p.person_id)/array.count AS female_percentage

        FROM elected e
        LEFT JOIN mps v ON v.mp_id=e.mp_id
        RIGHT JOIN belongs b ON b.mp_id=v.mp_id
        LEFT JOIN persons p ON p.person_id=v.person_id
        LEFT JOIN parties k ON k.party_id=b.party_id
        LEFT JOIN (
            SELECT e.constituency, b.party_id ,count(p.person_id) AS count
            FROM elected e
            LEFT JOIN mps v ON e.mp_id=v.mp_id
                RIGHT JOIN belongs b ON b.mp_id=v.mp_id
            LEFT JOIN persons p ON v.person_id=p.person_id
            GROUP BY e.constituency, b.party_id
        ) AS array ON array.constituency = e.constituency and array.party_id = b.party_id
        WHERE p.sex="Γ"
        GROUP BY e.constituency, b.party_id
    ) AS female
    LEFT JOIN (
        /* men */
        SELECT 
            e.constituency AS constituency,
            k.name AS name,
            count(p.person_id)/array.count AS male_percentage
        FROM elected e
        LEFT JOIN mps v ON v.mp_id=e.mp_id
        RIGHT JOIN belongs b ON b.mp_id=v.mp_id
        LEFT JOIN persons p ON p.person_id=v.person_id
        LEFT JOIN parties k ON k.party_id=b.party_id
        LEFT JOIN (
            SELECT e.constituency, b.party_id ,count(p.person_id) AS count
            FROM elected e
            LEFT JOIN mps v ON e.mp_id=v.mp_id
            RIGHT JOIN belongs b ON b.mp_id=v.mp_id
            LEFT JOIN persons p ON v.person_id=p.person_id
            GROUP BY e.constituency, b.party_id
        ) AS array ON array.constituency = e.constituency and array.party_id = b.party_id
        WHERE p.sex="Α"
        GROUP BY e.constituency, b.party_id
    ) AS male ON male.constituency=female.constituency and male.name=female.name

/* =================== */
UNION ALL
/* =================== */

    /*
     *  Part 2 
     *  Gets all male and female records, based on contituency and name,  and make RIGHT JOIN.
    */
    SELECT 
        male.constituency,
        male.name,
        male.male_percentage,
        female.female_percentage
    FROM(
        SELECT 
            e.constituency,
            k.name,
            count(p.person_id)/array.count AS female_percentage

        FROM elected e
        LEFT JOIN mps v ON v.mp_id=e.mp_id
        RIGHT JOIN belongs b ON b.mp_id=v.mp_id
        LEFT JOIN persons p ON p.person_id=v.person_id
        LEFT JOIN parties k ON k.party_id=b.party_id
        LEFT JOIN (
            SELECT e.constituency, b.party_id ,count(p.person_id) AS count
            FROM elected e
            LEFT JOIN mps v ON e.mp_id=v.mp_id
                RIGHT JOIN belongs b ON b.mp_id=v.mp_id
            LEFT JOIN persons p ON v.person_id=p.person_id
            GROUP BY e.constituency, b.party_id
        ) AS array ON array.constituency = e.constituency and array.party_id = b.party_id
        WHERE p.sex="Γ"
        GROUP BY e.constituency, b.party_id
    ) AS female
    RIGHT JOIN (
            /* men */
        SELECT 
            e.constituency AS constituency,
            k.name AS name,
            count(p.person_id)/array.count AS male_percentage
        FROM elected e
        LEFT JOIN mps v ON v.mp_id=e.mp_id
        RIGHT JOIN belongs b ON b.mp_id=v.mp_id
        LEFT JOIN persons p ON p.person_id=v.person_id
        LEFT JOIN parties k ON k.party_id=b.party_id
        LEFT JOIN (
            SELECT e.constituency, b.party_id ,count(p.person_id) AS count
            FROM elected e
            LEFT JOIN mps v ON e.mp_id=v.mp_id
                RIGHT JOIN belongs b ON b.mp_id=v.mp_id
            LEFT JOIN persons p ON v.person_id=p.person_id
            GROUP BY e.constituency, b.party_id
        ) AS array ON array.constituency = e.constituency and array.party_id = b.party_id
        WHERE p.sex="Α"
        GROUP BY e.constituency, b.party_id
    ) AS male ON male.constituency=female.constituency and male.name=female.name

) AS everything
GROUP BY everything.constituency, everything.name
ORDER BY everything.constituency

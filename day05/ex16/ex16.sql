SELECT count(date) as `movies`
FROM member_history
WHERE DATE(date) >= '2006-10-30' AND DATE(date) <= '2007-07-27'
OR day(date) = 24 AND MONTH(date) = 12;
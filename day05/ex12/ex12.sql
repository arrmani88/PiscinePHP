SELECT first_name, last_name
FROM user_card
WHERE last_name LIKE "%-%" or first_name LIKE "%-%"
ORDER BY last_name, first_name ASC;
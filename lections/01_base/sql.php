<?php

"SELECT * FROM users";
"SELECT * FROM `users` WHERE id IN(1,2)";
"SELECT * FROM `users` WHERE `name` LIKE 'Pet%'";

"SELECT * FROM `users` WHERE `id` > 1 LIMIT 2"; // первые 2
"SELECT * FROM `users` WHERE `id` > 1 LIMIT 2 OFFSET 2"; // первые 2, пропустив первые 2
"SELECT * FROM `users` WHERE `id` > 1 ORDER BY id DESC"; // отсортированые по убыванию

"SELECT users.id, users.email, posts.id as posts_id, posts.message FROM `users`
LEFT JOIN
posts
ON users.id = posts.user_id";

"DELETE FROM users WHERE id = 1";

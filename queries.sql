-- список проектов
INSERT INTO category (name_category) 
VALUES 
	('Входящие'), ('Учеба'), ('Работа'), ('Домашние дела'), ('Авто');
-- список пользователей
INSERT INTO users (name, email, password)
VALUES 
	('Максим', 'maksbr@gmail.com', 'Guiosld00'), 
	('Артем', 'martyy@gmail.com', 'FuIujsd11');
-- список задач
INSERT INTO projects (user_id, task, date_complite, category_id, complited) 
VALUES
	(1,'Собеседование в IT компании', '12.11.2019', 3, 0),
	(2,'Выполнить тестовое задание', '25.12.2019', 3, 0),
	(1,'Сделать задание первого раздела', '21.12.2019', 2, 1),
	(2,'Встреча с другом', '22.12.2019', 1, 0),
	(1,'Купить корм для кота', null, 4, 0),
	(2,'Заказать пиццу', null, 4, 0);

-- список проектов пользователя
SELECT u.name, p.task FROM projects p
JOIN users u ON p.user_id = u.id
WHERE u.name = 'Максим';

-- список из всех задач для одного проекта
SELECT * FROM projects p
JOIN category c ON p.category_id = c.id
WHERE c.name_category = 'Входящие';

-- пометить задачу как выполненную
UPDATE projects SET complited = 1
WHERE task = 'Собеседование в IT компании'; 

-- обновить название задачи по её идентификатору.
UPDATE projects SET task = 'Выполнил тестовое задание'
WHERE id = 2;
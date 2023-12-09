INSERT INTO `event_type` (`name`) VALUES
('Concert'),
('Movie'),
('Theatre'),
('Sport');

INSERT INTO `events` (`fk_event_type_id`, `name`, `date_time_start`, `description`, `picture`, `capacity`, `email`, `phone_number`, `address_street`, `address_street_number`, `address_zipcode`, `address_city`, `ext_url`) VALUES
(1, 'Haru Nemuri NA Tour', '2023-12-11 19:00:00', 'Let\'s go', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShPIIYcT8MzpkWoHegM1rTzF3vsqFPflNbRg&usqp=CAU', 100, 'email@email.com', '0654454545455', 'Street 1', 12, 3200, 'City 1', NULL),
(1, 'Ennio Morricone', '2021-07-21 12:00:00', 'Morricone medley', 'https://m.media-amazon.com/images/M/MV5BMTk4MDgxMjI2OF5BMl5BanBnXkFtZTYwNjkzODc0._V1_FMjpg_UX1000_.jpg', 500, 'email@email.com', '454545454', 'Street2', 33, 4444, 'City2', NULL),
(2, 'The Good, The Bad and the Ugly', '2021-11-18 18:30:00', 'Classic italian western', 'https://m.media-amazon.com/images/M/MV5BNjJlYmNkZGItM2NhYy00MjlmLTk5NmQtNjg1NmM2ODU4OTMwXkEyXkFqcGdeQXVyMjUzOTY1NTc@._V1_.jpg', 150, 'email@email.com', '555555', 'Street 4', 23, 3345, 'City 4', NULL),
(4, 'Extreme paddling', '2018-11-14 23:00:00', 'Boats', 'https://www.ontarioparks.com/parksblog/wp-content/uploads/2022/06/Selkirk_KayakingFemale.jpg', 20, 'email@email.com', '45454545', 'Street 30', 23, 2345, 'City 5', NULL),
(3, '1001 Märchen', '2021-06-22 23:00:00', '1001 tales', 'https://www.theaterboerse.de/verlag/167749-large_default/1001-maerchen.jpg', 200, 'email@email.com', '232323', 'street 30', 23, 3388, 'City 99', NULL),
(2, 'Metropolis', '2023-03-12 14:00:00', 'Classic', 'https://upload.wikimedia.org/wikipedia/en/thumb/9/97/Metropolis_%28German_three-sheet_poster%29.jpg/640px-Metropolis_%28German_three-sheet_poster%29.jpg', 120, 'email@email.com', '3433434', 'Street 200', 22, 2345, 'City 4', NULL),
(3, 'Iphigenie auf tauris', '1974-07-23 12:00:00', 'Goethe at its best', 'https://i.weltbild.de/p/iphigenie-auf-tauris-320867934.jpg', 100, 'email@email.com', '45454545', 'Street 4', 22, 45600, 'City 99', NULL);


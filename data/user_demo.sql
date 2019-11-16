CREATE TABLE `user` (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(200) NOT NULL,
    firstname varchar(200) NOT NULL,
    email varchar(200),
    birthday varchar(200),
    password varchar(200)
) collate latin1_general_ci;

INSERT INTO `user` (name, firstname, email, birthday, password) VALUES
('Dobslaf', 'Dennisüäö', 'dennis@dobslaf.de', '1981-07-10', '$2y$12$5J3YAbysM6Ud97Q/ie.zTOkx/X2CjdPGhidL6YHSHX379DOzVzWp.'),
('Dobslaf', 'Dennis1', 'dennis1@dobslaf.de', '1981-07-10', '$2y$12$5J3YAbysM6Ud97Q/ie.zTOkx/X2CjdPGhidL6YHSHX379DOzVzWp.'),
('Dobslaf', 'Dennis2', 'dennis2@dobslaf.de', '1981-07-10', '$2y$12$5J3YAbysM6Ud97Q/ie.zTOkx/X2CjdPGhidL6YHSHX379DOzVzWp.'),
('Dobslaf', 'Dennis3', 'dennis3@dobslaf.de', '1981-07-10', '$2y$12$5J3YAbysM6Ud97Q/ie.zTOkx/X2CjdPGhidL6YHSHX379DOzVzWp.'),
('Dobslaf', 'Dennis4', 'dennis4@dobslaf.de', '1981-07-10', '$2y$12$5J3YAbysM6Ud97Q/ie.zTOkx/X2CjdPGhidL6YHSHX379DOzVzWp.'),
('Dobslaf', 'Dennis5', 'dennis5@dobslaf.de', '1981-07-10', '$2y$12$5J3YAbysM6Ud97Q/ie.zTOkx/X2CjdPGhidL6YHSHX379DOzVzWp.');
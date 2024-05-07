USE SoccerStats;

CREATE TABLE League (
    league_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    country VARCHAR(100),
    level INT
);

CREATE TABLE Team (
    team_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    city VARCHAR(100),
    country VARCHAR(100),
    founded YEAR,
    league_id INT,
    FOREIGN KEY (league_id) REFERENCES League(league_id)
);

CREATE TABLE Player (
    player_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    birthdate DATE,
    position VARCHAR(50),
    nationality VARCHAR(100),
    team_id INT,
    FOREIGN KEY (team_id) REFERENCES Team(team_id)
);

CREATE TABLE Game (
    game_id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    home_team_id INT,
    away_team_id INT,
    league_id INT,
    FOREIGN KEY (home_team_id) REFERENCES Team(team_id),
    FOREIGN KEY (away_team_id) REFERENCES Team(team_id),
    FOREIGN KEY (league_id) REFERENCES League(league_id)
);

CREATE TABLE Stat (
    stat_id INT AUTO_INCREMENT PRIMARY KEY,
    player_id INT,
    game_id INT,
    goals INT DEFAULT 0,
    assists INT DEFAULT 0,
    minutes_played INT DEFAULT 0,
    FOREIGN KEY (player_id) REFERENCES Player(player_id),
    FOREIGN KEY (game_id) REFERENCES Game(game_id)
);
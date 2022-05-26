-- User related entries
INSERT INTO users(`username`, `password`, `email`, `first_name`, `last_name`) VALUES
    ("jupiter", ";%Zns&m3Tv", "ashley_bradtke21@hotmail.com", "Ashley", "Bradtke"),
    ("romanholiday", "Lb5Z\H$2a=", "evan_ondricka@hotmail.com", "Evan", "Odrick"),
    ("cauliflower", "/a9^D$zX`+", "nya.yundt54@gmail.com", "Anthony", "Hubbert"),
    ("tangerine", "MEdR>5'Gb`", "clementine10@hotmail.com", "Clementine", "Greer");

-- Task related entries
INSERT INTO Tasks(`title`, `description`, `account_id`, `status`, `entry_date`, `due_date`) VALUES
    ("Take Out the Trash", "Put it in the green bin.", 1, 'Not-Started', NOW(), NULL),
    ("Wash the Dishes", "Wash and dry.", 1, 'Done', NOW(), NULL),
    ("Walk the dog", "Remember to bring the leash with you.", 1, 'Done', NOW(), NOW()),
    ("Do homework!!!", "Chemistry, Algebra, .", 1, 'OverDue', NOW(), "2022-03-12"),
    ("Grocery Shop", "Onions, Tomatoes, Ground Beef", 1, 'Done', "2022-04-15", NULL),
    ("Go Biking", NULL, 2, 'In-Progress', "2022-04-23", NULL),
    ("Mail Letter", "Go to post office and mail letter", 2, 'Not-Started', "2022-05-1", "2022-05-16"),
    ("Create Spreadsheat", NULL, 2, 'OverDue', "2022-03-12", "2022-03-12"),
    ("Bake Cookies", "Bake 2 batches of cookies", 3, 'In-Progress', "2022-04-23", "2022-04-26"),
    ("Wash the Dog", "Go to pet salon.", 4, 'Not-Started', "2022-03-12", "2022-04-27"),
    ("Pick Up Friend", NULL, 4, 'Not-Started', "2022-04-23", NULL);

COMMIT;
.bail ON
.mode columns
.headers on
.nullvalue NULL
PRAGMA foreign_keys = ON;

INSERT INTO User VALUES (1, 'Catarina', 'cat@gmail.com', '1111');
INSERT INTO User VALUES (2, 'Ze', 'ze@gmail.com', '1111');
INSERT INTO User VALUES (3, 'Ana', 'ana@gmail.com', '1111');
INSERT INTO User VALUES (4, 'Joao', 'joao@gmail.com', '1111');
INSERT INTO User VALUES (5, 'Maria', 'maria@gmail.com', '1111');
INSERT INTO User VALUES (6, 'Pedro', 'pedro@gmail.com', '1111');



INSERT INTO Owner VALUES (1);
INSERT INTO Owner VALUES (2);


INSERT INTO Reviewer VALUES(1);
INSERT INTO Reviewer VALUES(2);
INSERT INTO Reviewer VALUES(3);
INSERT INTO Reviewer VALUES(4);
INSERT INTO Reviewer VALUES(5);
INSERT INTO Reviewer VALUES(6);



INSERT INTO Restaurant VALUES(1, 'Rest1', null, null);
INSERT INTO Restaurant VALUES(2, 'Rest2', null, null);
INSERT INTO Restaurant VALUES(3, 'Rest3', null, null);
INSERT INTO Restaurant VALUES(4, 'Rest4', null, null);
INSERT INTO Restaurant VALUES(5, 'Rest5', null, null);
INSERT INTO Restaurant VALUES(6, 'Rest6', null, null);



INSERT INTO Restaurant_Owners VALUES(1, 1);
INSERT INTO Restaurant_Owners VALUES(1, 2);
INSERT INTO Restaurant_Owners VALUES(2, 1);
INSERT INTO Restaurant_Owners VALUES(3, 2);
INSERT INTO Restaurant_Owners VALUES(4, 1);
INSERT INTO Restaurant_Owners VALUES(5, 2);
INSERT INTO Restaurant_Owners VALUES(6, 2);



INSERT INTO Review VALUES(1, 'Soy', null, null, 10);
INSERT INTO Review VALUES(2, 'Espanol', null, null, 8);


INSERT INTO Restaurant_Review VALUES(1, 2, 4);
INSERT INTO Restaurant_Review VALUES(2, 3, 4);
INSERT INTO Restaurant_Review VALUES(1, 1, 1);


INSERT INTO Reply VALUES(1, 1, 4, 'thanks');
INSERT INTO Reply VALUES(2, 1, 1, 'thanks2');
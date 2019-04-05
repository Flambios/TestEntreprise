#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: note
#------------------------------------------------------------

CREATE TABLE note(
        id        Int  Auto_increment  NOT NULL ,
        note      Int NOT NULL ,
        idEleve   Int NOT NULL ,
        idMatiere Int NOT NULL
	,CONSTRAINT note_Idx INDEX (idEleve,idMatiere)
	,CONSTRAINT note_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: etudiant
#------------------------------------------------------------

CREATE TABLE etudiant(
        id      Int  Auto_increment  NOT NULL ,
        nom     Varchar (50) NOT NULL ,
        prenom  Varchar (50) NOT NULL ,
        id_note Int NOT NULL
	,CONSTRAINT etudiant_PK PRIMARY KEY (id)

	,CONSTRAINT etudiant_note_FK FOREIGN KEY (id_note) REFERENCES note(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: matiere
#------------------------------------------------------------

CREATE TABLE matiere(
        id      Int  Auto_increment  NOT NULL ,
        matiere Varchar (50) NOT NULL ,
        id_note Int NOT NULL
	,CONSTRAINT matiere_PK PRIMARY KEY (id)

	,CONSTRAINT matiere_note_FK FOREIGN KEY (id_note) REFERENCES note(id)
)ENGINE=InnoDB;


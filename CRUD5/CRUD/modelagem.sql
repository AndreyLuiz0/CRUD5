CREATE TABLE aluno (
  idaluno INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  curso_idcurso INTEGER UNSIGNED NOT NULL,
  disciplina_iddisciplina INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(150) NOT NULL,
  endereço VARCHAR NOT NULL,
  PRIMARY KEY(idaluno, curso_idcurso, disciplina_iddisciplina),
  INDEX aluno_FKIndex1(curso_idcurso),
  INDEX aluno_FKIndex2(disciplina_iddisciplina)
);

CREATE TABLE curso (
  idcurso INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_curso VARCHAR NOT NULL,
  PRIMARY KEY(idcurso)
);

CREATE TABLE disciplina (
  iddisciplina INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  curso_idcurso INTEGER UNSIGNED NOT NULL,
  nome_disciplina VARCHAR(45) NOT NULL,
  sala INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(iddisciplina),
  INDEX disciplina_FKIndex1(curso_idcurso)
);

CREATE TABLE professor (
  idprofessor INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  disciplina_iddisciplina INTEGER UNSIGNED NOT NULL,
  nome_professor VARCHAR(100) NOT NULL,
  data_nasc_prof DATE NOT NULL,
  PRIMARY KEY(idprofessor),
  INDEX professor_FKIndex1(disciplina_iddisciplina)
);

CREATE TABLE sala (
  idsala INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  disciplina_iddisciplina INTEGER UNSIGNED NOT NULL,
  numero_sala INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idsala),
  INDEX sala_FKIndex1(disciplina_iddisciplina)
);



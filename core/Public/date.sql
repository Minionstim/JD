--管理员表
create table manager
(
	id				int				auto_increment			primary key,
	adminname		varchar(100)	not null unique,
	password		varchar(100)	not null,
	userType		varchar(20)		not null,
	remark			varchar(200)		null,
	addnum			int				default 0
);
insert into manager(adminname,password,userType)values('admin','123','系统管理员');
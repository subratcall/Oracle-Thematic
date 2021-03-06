create table Friend(

  phone_a varchar2(50) not null,

  phone_b varchar2(50) not null,

  status nvarchar2(50),

  primary key(phone_a,phone_b)

);

create table Room(

  id_room varchar2(50) primary key,

  password varchar2(50),

  type nvarchar2(50)

);

create table Userr(

  phone varchar2(50),

  password varchar2(50),

  email varchar(50),

  name nvarchar2(50),

  avatar varchar2(50),

  status nvarchar2(50),

  timeoff date,

  primary key(phone)

);

create table Room_Detail(

  id_room varchar2(50),

  phone_user varchar2(50),

  primary key(id_room,phone_user)

);

create table Room_Mess(

  id number GENERATED ALWAYS AS IDENTITY,

  id_room varchar2(50),

  phone_user varchar2(50),

  time date,

  content nvarchar2(1000),

  primary key(id)

);

create table Read_Mess(

  id_mess number,

  phone_user varchar(50),

  status varchar(50),

  primary key(id_mess,phone_user)

);

alter table Room_Mess add constraint FK_Room_RoomMess foreign key(id_room) references Room(id_room);

alter table Room_Mess add constraint FK_RoomMess_Userr foreign key(phone_user) references Userr(phone);



alter table Room_Detail add constraint FK_RoomDetail_Userr foreign key(phone_user) references Userr(phone);

alter table Room_Detail add constraint FK_RoomDetail_Room foreign key(id_room) references Room(id_room);



alter table Read_Mess add constraint FK_ReadMess_RoomMess foreign key(id_mess) references Room_Mess(id);

alter table Read_Mess add constraint FK_ReadMess_Userr foreign key(phone_user) references Userr(phone);



insert all 

  into Userr(phone,password,email,name) values('0867741780','123456','ohwhynotme1999@gmail.com','Trần Bá Khoa')

  into Userr(phone,password,email,name) values('03658109','123456','nguyenthienan1999@gmail.com','Nguyễn Thiên Ân')

select  from dual;

alter session set NLS_DATE_FORMAT='dd-mon-yyyy hh24:mi:ss';  

  select * from Userr;
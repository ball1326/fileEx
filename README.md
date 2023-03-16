# เว็บแสดงรายชื่อนักฟุตบอล PHP MVC OOP JSON DOCKER
### โดย นาย ศักรินทร์ สิงหอยู่ 64429021 มรน.
### 1.ติดตั้ง Docker 
เพื่มรันตัว Nginx Server PHP MariaDB และ PHPMyAdmin 
> https://www.docker.com
![image](https://user-images.githubusercontent.com/73205970/222142805-63e41f1a-98de-4074-892d-6d2164290af8.png)

### 2. Clone โปรเจคนี้
> https://github.com/sekkarin/playerlist_docker_php
![image](https://user-images.githubusercontent.com/73205970/222143219-ce53c7b1-5b2b-4886-b89d-8ef989ef8e7a.png)
### 3. เปิดโปรเจคใน Editer
![image](https://user-images.githubusercontent.com/73205970/222143633-780c5a56-e852-45f7-824e-e0620cd64239.png)
#### Folder mariadb 
 เก็บข้อมูลต่างๆฐานข้อมูล
#### Folder nginx 
 เก็บข้อมูลต่างๆและการตั้ง่ค่าๆของ nginx
#### Folder php 
 เป็นการตั้งค่าต่างๆของ PHP เช่น การลง package ต่างๆ
#### Folder src 
 เป็นโฟล์เดอร์ เกี่ยวกับ การ source ต่างๆ เริ่มต้นไฟล์ index.php
 #### File docker-compose.yml 
 docker-compose เป็นการจัดการเกี่ยวกับ container 
### 4. เปิดโปรแกรม Docker Desktop ขึ้นมา
 ![image](https://user-images.githubusercontent.com/73205970/222147398-27e580cf-1dc0-40b3-885c-48bbe0f9ea0f.png)
### 4. เปิด Command Prompt ขึ้นมาในโฟล์เดอร์ โปรเจค
![image](https://user-images.githubusercontent.com/73205970/222147950-cd611650-a12c-494d-a3e1-2de36ca37746.png)
#### Run 
  > docker-compose up -d  
###
![image](https://user-images.githubusercontent.com/73205970/222149444-137c4ce6-0aa9-4547-a207-6f3206da07cc.png)
#### ดู image และ container
![image](https://user-images.githubusercontent.com/73205970/222150182-4ef28685-f33c-4aef-bc7c-3196c6064287.png)
![image](https://user-images.githubusercontent.com/73205970/222150251-6efa38e5-83b6-4cd4-8007-ecbeb95bc252.png)
#### ตัว PHP จะใช้ > http://localhost:80
![image](https://user-images.githubusercontent.com/73205970/222151573-eb1ffe74-bb63-4db0-af5c-42695d8029c6.png)
#### ตัว PHPMYADMIN จะใช้ > http://localhost:3001
  #### USERNAME 
    > root
  #### PASSWROLD 
    >  123456
![image](https://user-images.githubusercontent.com/73205970/222150831-22802a03-23e7-4917-ab6b-481bca5ffd21.png)








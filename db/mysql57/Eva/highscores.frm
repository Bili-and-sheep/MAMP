TYPE=VIEW
query=select `eva`.`player`.`name` AS `name`,max(`eva`.`game`.`score`) AS `score` from (`eva`.`player` join `eva`.`game` on((`eva`.`game`.`playerid` = `eva`.`player`.`id`))) group by `eva`.`player`.`id`
md5=e6185052fff167e9f4a3156363d7bd35
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2024-01-09 10:52:42
create-version=1
source=select name, max(score) as score from player inner join game on playerid = player.id group by player.id
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `eva`.`player`.`name` AS `name`,max(`eva`.`game`.`score`) AS `score` from (`eva`.`player` join `eva`.`game` on((`eva`.`game`.`playerid` = `eva`.`player`.`id`))) group by `eva`.`player`.`id`

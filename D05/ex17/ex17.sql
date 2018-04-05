SELECT distinct
(SELECT count(*) from subscription) as nb_sucs,
(SELECT FLOOR(AVG(price)) from subscription) as av_sucs,
(SELECT SUM(duration_sub) % 42 from subscription) as ft;

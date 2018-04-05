update ft_table
  set ’creation_date’ = date_add(’creation_date’, INTERVAL 20 YEAR)
  where ’id’ > 5;

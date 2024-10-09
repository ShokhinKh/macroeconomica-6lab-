CREATE TABLE `users` (
`ID` int(11) NOT NULL,
`firstname` varchar(50) NOT NULL,
`lastname` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `firstname`, `lastname`, `password`) VALUES
(1, 'shokhin', 'sho@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('messageModal'), {})
    myModal.show()
</script>

</html>
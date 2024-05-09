SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formular` (
  `customer_id` int(11) NOT NULL,
  `meno` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `poznamka` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `formular`
  ADD PRIMARY KEY (`customer_id`);

ALTER TABLE `formular`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
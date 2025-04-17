ALTER TABLE `ospos_items`
  ADD COLUMN `expiring_date` DATE NULL;

ALTER TABLE `ospos_items`
  ADD COLUMN `expiring_date_is_not_applicable` tinyint(1) NOT NULL DEFAULT 1;

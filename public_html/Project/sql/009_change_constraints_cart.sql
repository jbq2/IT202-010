ALTER TABLE `Cart`
ALTER desired_quantity SET DEFAULT 1;

ALTER TABLE `Cart`
ADD CHECK (desired_quantity > 0);
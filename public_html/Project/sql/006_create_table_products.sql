
CREATE TABLE IF NOT EXISTS Category(
    `name` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`name`)
);

INSERT INTO Category
VALUES('General Products');

CREATE TABLE IF NOT EXISTS Products(
    `id` INTEGER AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    `description` TEXT(65535) NOT NULL,
    `category` VARCHAR(50) NOT NULL DEFAULT 'General Products',
    `stock` INTEGER DEFAULT 0,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `unit_price` DECIMAL(8,2) DEFAULT 0.00,
    `visibility` BOOLEAN DEFAULT 0,
    PRIMARY KEY (`id`),
    CHECK (`stock` >= 0),
    CHECK (`unit_price` >= 0.00)
);

--foreign key constraint on 'category' field in products table
ALTER TABLE Products
ADD FOREIGN KEY(`category`) REFERENCES Category(`name`)
ON UPDATE CASCADE
ON DELETE CASCADE;
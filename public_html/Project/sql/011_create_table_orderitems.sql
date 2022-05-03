CREATE TABLE IF NOT EXISTS OrderItems (
    id INTEGER NOT NULL AUTO_INCREMENT,
    order_id INTEGER NOT NULL,
    product_id INTEGER NOT NULL,
    quantity INTEGER NOT NULL,
    unit_price INTEGER NOT NULL,
    PRIMARY KEY(id)
);

ALTER TABLE OrderItems
ADD CONSTRAINT FK_OrderItems_OrderId
FOREIGN KEY (order_id) REFERENCES Orders(id);

ALTER TABLE OrdersItems
ADD CONSTRAINT FK_OrderItems_ProductId
FOREIGN KEY (product_id) REFERENCES Products(id);

--quantity and unit_price received through join query
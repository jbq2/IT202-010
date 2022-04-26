CREATE TABLE IF NOT EXISTS Orders (
    id INTEGER NOT NULL AUTO_INCREMENT,
    user_id INTEGER NOT NULL,
    created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    total_price DECIMAL(8,2) NOT NULL DEFAULT 0.00,
    address VARCHAR(255) NOT NULL,
    payment_method VARCHAR(50) NOT NULL,
    money_received DECIMAL(8,2) NOT NULL DEFAULT 0.00,
    CHECK(total_price >= 0),
    PRIMARY KEY(id)
);

ALTER TABLE Orders
ADD CONSTRAINT FK_Orders_UserId
FOREIGN KEY (user_id) REFERENCES Users(user_id);

ALTER TABLE Orders
ADD CONSTRAINT Orders_Chk_MoneyReceived
CHECK (money_received >= 0);
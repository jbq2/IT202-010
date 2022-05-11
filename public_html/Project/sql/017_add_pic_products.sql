ALTER TABLE `Products`
DROP COLUMN picurl;

ALTER TABLE `Products`
ADD picurl VARCHAR(255) DEFAULT 'https://blog.focusinfotech.com/wp-content/uploads/2017/12/default-placeholder-300x300.png';
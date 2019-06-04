
-- lay toan bo cac ban ghi o trong bang uigct_content
SELECT * FROM uigct_content

-- lay 1 so truong trong bang uigct_content
SELECT id, title, alias FROM uigct_content

-- lay ra ban ghi so 5
SELECT * FROM uigct_content WHERE id=5

-- lay ra so luong bai viet co luot xem > 5
SELECT * FROM uigct_content WHERE hits > 5

SELECT * FROM Customers
WHERE CustomerID BETWEEN 5 AND 10;
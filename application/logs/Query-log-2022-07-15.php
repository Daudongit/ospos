SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.18171000480652

SELECT GET_LOCK('e9b574b064c988c5084cb16d244401f1', 300) AS ci_session_lock 
 Execution Time:0.00047183036804199

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.0018970966339111

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.1000349521637

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.058466196060181

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.062182903289795

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.0013909339904785

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.015728950500488

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.0010929107666016

SELECT GET_LOCK('e9b574b064c988c5084cb16d244401f1', 300) AS ci_session_lock 
 Execution Time:0.0004570484161377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.00057411193847656

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.047579050064087

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.00052690505981445

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005030632019043

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.0010738372802734

SELECT GET_LOCK('e9b574b064c988c5084cb16d244401f1', 300) AS ci_session_lock 
 Execution Time:0.0016510486602783

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.00086379051208496

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011019706726074

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.056885004043579

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013489723205566

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.07953405380249

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0011529922485352

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0017991065979004

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0013291835784912

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0013301372528076

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010998249053955

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0013501644134521

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00092005729675293

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.00099611282348633

SELECT GET_LOCK('e9b574b064c988c5084cb16d244401f1', 300) AS ci_session_lock 
 Execution Time:0.00049495697021484

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.00081706047058105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.014232158660889

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0010669231414795

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011920928955078

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.026340007781982

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00062084197998047

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.012866973876953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059103965759277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00054407119750977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052094459533691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00061416625976562

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.00073003768920898

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00076699256896973

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00048208236694336

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0004880428314209

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00048208236694336

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.022608995437622

SELECT GET_LOCK('e9b574b064c988c5084cb16d244401f1', 300) AS ci_session_lock 
 Execution Time:0.00041484832763672

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0013360977172852

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0012791156768799

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0018281936645508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0044379234313965

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00052785873413086

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.022840976715088

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00077319145202637

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.027196884155273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074386596679688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075006484985352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006868839263916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068402290344238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00072813034057617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_employees`.`person_id` = `ospos_people`.`person_id`
WHERE `deleted` = 0
ORDER BY `last_name` ASC
 LIMIT 10000 
 Execution Time:0.0014841556549072

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.019321918487549

SELECT GET_LOCK('e9b574b064c988c5084cb16d244401f1', 300) AS ci_session_lock 
 Execution Time:0.00036907196044922

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0014262199401855

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0010828971862793

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014321804046631

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058293342590332

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.011033058166504

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.02140998840332

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00079798698425293

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0013599395751953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078392028808594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006718635559082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059819221496582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00079202651977539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00070309638977051

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount, 2)) AS tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS internal_tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sales.sale_time) BETWEEN '2022-07-09' AND '2022-07-15'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.024834871292114

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(payments.payment_type) AS cash_or_transer,
					GROUP_CONCAT(CONCAT((payments.payment_amount - payments.cash_refund))) AS just_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE DATE(sales.sale_time) BETWEEN '2022-07-09' AND '2022-07-15'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.44578003883362

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sales.sale_time) BETWEEN '2022-07-09' AND '2022-07-15'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:1.1985020637512

SELECT `sale_id`, MAX(CASE
			WHEN sale_type = 0 && sale_status = 0 THEN 'POS'
			WHEN sale_type = 1 && sale_status = 0 THEN 'INV'
			WHEN sale_type = 2 && sale_status = 1 THEN 'W/O'
			WHEN sale_type = 3 && sale_status = 1 THEN 'Q'
			WHEN sale_type = 4 && sale_status = 0 THEN 'RET'
			WHEN sale_status = 2 THEN 'CNL'
			ELSE ''
			END) AS type_code, MAX(sale_status) as sale_status, MAX(sale_time) AS sale_time, SUM(quantity_purchased) AS items_purchased, MAX(customer_name) AS customer_name, SUM(subtotal) AS subtotal, SUM(tax) AS tax, SUM(total) AS total, SUM(cost) AS cost, SUM(profit) AS profit, MAX(payment_type) AS payment_type, MAX(comment) AS comment
FROM `ospos_sales_items_temp`
WHERE `employee_id` = '493'
AND `sale_status` = 0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 )
GROUP BY `sale_id`
ORDER BY MAX(sale_time) 
 Execution Time:0.024381875991821

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65514' 
 Execution Time:0.0011367797851562

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65514' 
 Execution Time:0.0013079643249512

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65518' 
 Execution Time:0.00072193145751953

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65518' 
 Execution Time:0.00063800811767578

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65520' 
 Execution Time:0.00068902969360352

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65520' 
 Execution Time:0.00062203407287598

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65523' 
 Execution Time:0.00069904327392578

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65523' 
 Execution Time:0.0008389949798584

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65524' 
 Execution Time:0.00087690353393555

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65524' 
 Execution Time:0.00061607360839844

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65526' 
 Execution Time:0.00071406364440918

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65526' 
 Execution Time:0.00069689750671387

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65529' 
 Execution Time:0.00087285041809082

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65529' 
 Execution Time:0.00076913833618164

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65530' 
 Execution Time:0.00086688995361328

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65530' 
 Execution Time:0.001215934753418

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65531' 
 Execution Time:0.00090813636779785

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65531' 
 Execution Time:0.00073504447937012

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65532' 
 Execution Time:0.0008690357208252

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65532' 
 Execution Time:0.00050902366638184

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65534' 
 Execution Time:0.00053906440734863

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65534' 
 Execution Time:0.00046682357788086

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65538' 
 Execution Time:0.00060892105102539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65538' 
 Execution Time:0.00047492980957031

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65544' 
 Execution Time:0.0005190372467041

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65544' 
 Execution Time:0.00045299530029297

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65546' 
 Execution Time:0.00054287910461426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65546' 
 Execution Time:0.00045108795166016

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65548' 
 Execution Time:0.00048518180847168

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65548' 
 Execution Time:0.0004119873046875

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65552' 
 Execution Time:0.0004730224609375

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65552' 
 Execution Time:0.00043892860412598

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65559' 
 Execution Time:0.00049400329589844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65559' 
 Execution Time:0.00043892860412598

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65560' 
 Execution Time:0.00058889389038086

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65560' 
 Execution Time:0.00048995018005371

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65563' 
 Execution Time:0.00092196464538574

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65563' 
 Execution Time:0.00061988830566406

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65566' 
 Execution Time:0.00048089027404785

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65566' 
 Execution Time:0.00045108795166016

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65567' 
 Execution Time:0.00049614906311035

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65567' 
 Execution Time:0.00048613548278809

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65556' 
 Execution Time:0.0005650520324707

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65556' 
 Execution Time:0.00045394897460938

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65568' 
 Execution Time:0.00048208236694336

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65568' 
 Execution Time:0.00041699409484863

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65574' 
 Execution Time:0.0005040168762207

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65574' 
 Execution Time:0.00042009353637695

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65575' 
 Execution Time:0.00045990943908691

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65575' 
 Execution Time:0.00040698051452637

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65585' 
 Execution Time:0.00045585632324219

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65585' 
 Execution Time:0.00041890144348145

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65587' 
 Execution Time:0.00046086311340332

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65587' 
 Execution Time:0.00040602684020996

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65586' 
 Execution Time:0.00045895576477051

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65586' 
 Execution Time:0.00040698051452637

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65589' 
 Execution Time:0.00049400329589844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65589' 
 Execution Time:0.00040388107299805

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65593' 
 Execution Time:0.00044894218444824

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65593' 
 Execution Time:0.0004119873046875

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65592' 
 Execution Time:0.00050210952758789

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65592' 
 Execution Time:0.00040698051452637

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65595' 
 Execution Time:0.00043916702270508

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65595' 
 Execution Time:0.00039076805114746

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65596' 
 Execution Time:0.00070405006408691

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65596' 
 Execution Time:0.0005340576171875

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65597' 
 Execution Time:0.00096583366394043

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65597' 
 Execution Time:0.00059080123901367

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65598' 
 Execution Time:0.00066685676574707

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65598' 
 Execution Time:0.0005640983581543

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65600' 
 Execution Time:0.00069308280944824

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65600' 
 Execution Time:0.0005340576171875

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65615' 
 Execution Time:0.00063705444335938

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65615' 
 Execution Time:0.0004878044128418

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65617' 
 Execution Time:0.00062799453735352

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65617' 
 Execution Time:0.00054717063903809

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65618' 
 Execution Time:0.00062894821166992

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65618' 
 Execution Time:0.00049591064453125

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65624' 
 Execution Time:0.00063180923461914

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65624' 
 Execution Time:0.00052809715270996

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65627' 
 Execution Time:0.00043606758117676

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65627' 
 Execution Time:0.00035786628723145

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65628' 
 Execution Time:0.00037789344787598

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65628' 
 Execution Time:0.00036311149597168

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65631' 
 Execution Time:0.00039792060852051

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65631' 
 Execution Time:0.00034689903259277

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65633' 
 Execution Time:0.0010221004486084

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65633' 
 Execution Time:0.00046014785766602

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65634' 
 Execution Time:0.00043296813964844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65634' 
 Execution Time:0.00034403800964355

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65636' 
 Execution Time:0.0003972053527832

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65636' 
 Execution Time:0.00035715103149414

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65638' 
 Execution Time:0.0003969669342041

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65638' 
 Execution Time:0.00034213066101074

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65639' 
 Execution Time:0.0003809928894043

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65639' 
 Execution Time:0.00063085556030273

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65640' 
 Execution Time:0.00063300132751465

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65640' 
 Execution Time:0.00056600570678711

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65649' 
 Execution Time:0.00071907043457031

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65649' 
 Execution Time:0.00053191184997559

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65652' 
 Execution Time:0.00065207481384277

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65652' 
 Execution Time:0.00050187110900879

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65656' 
 Execution Time:0.00060009956359863

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65656' 
 Execution Time:0.00048184394836426

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65657' 
 Execution Time:0.0004730224609375

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65657' 
 Execution Time:0.0003960132598877

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65659' 
 Execution Time:0.00044417381286621

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65659' 
 Execution Time:0.00039315223693848

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65663' 
 Execution Time:0.00045490264892578

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65663' 
 Execution Time:0.00038599967956543

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65666' 
 Execution Time:0.00061297416687012

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65666' 
 Execution Time:0.00059008598327637

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65670' 
 Execution Time:0.00090694427490234

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65670' 
 Execution Time:0.00042605400085449

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65677' 
 Execution Time:0.00046014785766602

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65677' 
 Execution Time:0.0005500316619873

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65678' 
 Execution Time:0.00052809715270996

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65678' 
 Execution Time:0.00040793418884277

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65679' 
 Execution Time:0.00046420097351074

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65679' 
 Execution Time:0.00039482116699219

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65681' 
 Execution Time:0.00045609474182129

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65681' 
 Execution Time:0.00037693977355957

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65685' 
 Execution Time:0.00049114227294922

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65685' 
 Execution Time:0.0004429817199707

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65688' 
 Execution Time:0.00046801567077637

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65688' 
 Execution Time:0.00041103363037109

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65697' 
 Execution Time:0.00045585632324219

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65697' 
 Execution Time:0.00039410591125488

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65702' 
 Execution Time:0.0004580020904541

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65702' 
 Execution Time:0.00038695335388184

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65704' 
 Execution Time:0.00045299530029297

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65704' 
 Execution Time:0.00041699409484863

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65705' 
 Execution Time:0.00047516822814941

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65705' 
 Execution Time:0.00037384033203125

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65706' 
 Execution Time:0.00049018859863281

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65706' 
 Execution Time:0.00041508674621582

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65708' 
 Execution Time:0.0004570484161377

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65708' 
 Execution Time:0.00040507316589355

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65709' 
 Execution Time:0.00074911117553711

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65709' 
 Execution Time:0.00051403045654297

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65623' 
 Execution Time:0.0007171630859375

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65623' 
 Execution Time:0.00052404403686523

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65717' 
 Execution Time:0.00063800811767578

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65717' 
 Execution Time:0.0004570484161377

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65718' 
 Execution Time:0.00046586990356445

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65718' 
 Execution Time:0.0003809928894043

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65719' 
 Execution Time:0.00047111511230469

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65719' 
 Execution Time:0.00043511390686035

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65727' 
 Execution Time:0.00043296813964844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65727' 
 Execution Time:0.00037097930908203

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65728' 
 Execution Time:0.0004429817199707

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65728' 
 Execution Time:0.0003819465637207

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65730' 
 Execution Time:0.00047016143798828

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65730' 
 Execution Time:0.00040197372436523

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65731' 
 Execution Time:0.00054597854614258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65731' 
 Execution Time:0.00046896934509277

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65732' 
 Execution Time:0.00052905082702637

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65732' 
 Execution Time:0.00044798851013184

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65733' 
 Execution Time:0.00049591064453125

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65733' 
 Execution Time:0.00040698051452637

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65736' 
 Execution Time:0.00047612190246582

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65736' 
 Execution Time:0.00042295455932617

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65737' 
 Execution Time:0.00044798851013184

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65737' 
 Execution Time:0.00040817260742188

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65738' 
 Execution Time:0.00072503089904785

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65738' 
 Execution Time:0.00058913230895996

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65742' 
 Execution Time:0.00066304206848145

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65742' 
 Execution Time:0.00042510032653809

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65743' 
 Execution Time:0.00046515464782715

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65743' 
 Execution Time:0.00051403045654297

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65744' 
 Execution Time:0.00072908401489258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65744' 
 Execution Time:0.00057101249694824

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65745' 
 Execution Time:0.00054597854614258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65745' 
 Execution Time:0.00046205520629883

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65748' 
 Execution Time:0.00052499771118164

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65748' 
 Execution Time:0.00045394897460938

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65749' 
 Execution Time:0.00048184394836426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65749' 
 Execution Time:0.00041913986206055

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65750' 
 Execution Time:0.00052690505981445

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65750' 
 Execution Time:0.00056290626525879

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65752' 
 Execution Time:0.00051188468933105

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65752' 
 Execution Time:0.00042295455932617

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65757' 
 Execution Time:0.00051188468933105

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65757' 
 Execution Time:0.00048208236694336

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65759' 
 Execution Time:0.00058913230895996

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65759' 
 Execution Time:0.00046086311340332

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65764' 
 Execution Time:0.0005028247833252

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65764' 
 Execution Time:0.00095891952514648

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65767' 
 Execution Time:0.00054216384887695

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65767' 
 Execution Time:0.00047016143798828

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65769' 
 Execution Time:0.00050997734069824

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65769' 
 Execution Time:0.00053000450134277

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65774' 
 Execution Time:0.00072002410888672

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65774' 
 Execution Time:0.0004429817199707

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65775' 
 Execution Time:0.00067901611328125

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65775' 
 Execution Time:0.00049591064453125

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65778' 
 Execution Time:0.00051403045654297

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65778' 
 Execution Time:0.00042891502380371

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65781' 
 Execution Time:0.00050902366638184

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65781' 
 Execution Time:0.00043702125549316

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65785' 
 Execution Time:0.00048995018005371

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65785' 
 Execution Time:0.00045013427734375

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65786' 
 Execution Time:0.00051212310791016

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65786' 
 Execution Time:0.0004279613494873

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65791' 
 Execution Time:0.00043106079101562

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65791' 
 Execution Time:0.00037598609924316

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65794' 
 Execution Time:0.00041508674621582

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65794' 
 Execution Time:0.0003809928894043

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65806' 
 Execution Time:0.0005040168762207

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65806' 
 Execution Time:0.00039887428283691

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65805' 
 Execution Time:0.00046992301940918

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65805' 
 Execution Time:0.00058388710021973

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65810' 
 Execution Time:0.00065302848815918

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65810' 
 Execution Time:0.00075197219848633

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65817' 
 Execution Time:0.00061511993408203

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65817' 
 Execution Time:0.00044989585876465

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65819' 
 Execution Time:0.00052309036254883

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65819' 
 Execution Time:0.00047993659973145

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65821' 
 Execution Time:0.00051116943359375

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65821' 
 Execution Time:0.00041103363037109

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65826' 
 Execution Time:0.00042510032653809

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65826' 
 Execution Time:0.00038290023803711

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65824' 
 Execution Time:0.0005340576171875

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65824' 
 Execution Time:0.00042986869812012

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65831' 
 Execution Time:0.00045394897460938

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65831' 
 Execution Time:0.00039815902709961

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65833' 
 Execution Time:0.00044608116149902

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65833' 
 Execution Time:0.00046300888061523

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65834' 
 Execution Time:0.00050592422485352

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65834' 
 Execution Time:0.00048995018005371

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65837' 
 Execution Time:0.00045990943908691

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65837' 
 Execution Time:0.00040698051452637

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65840' 
 Execution Time:0.00042510032653809

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65840' 
 Execution Time:0.00035309791564941

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65842' 
 Execution Time:0.00043988227844238

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65842' 
 Execution Time:0.0004580020904541

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65844' 
 Execution Time:0.0010859966278076

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65844' 
 Execution Time:0.00058698654174805

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65853' 
 Execution Time:0.00054407119750977

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65853' 
 Execution Time:0.00045108795166016

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65849' 
 Execution Time:0.00055193901062012

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65849' 
 Execution Time:0.00043416023254395

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65856' 
 Execution Time:0.0005340576171875

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65856' 
 Execution Time:0.00060296058654785

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65857' 
 Execution Time:0.00054597854614258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65857' 
 Execution Time:0.00038599967956543

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65858' 
 Execution Time:0.00046610832214355

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65858' 
 Execution Time:0.00038003921508789

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65860' 
 Execution Time:0.00047421455383301

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65860' 
 Execution Time:0.00040197372436523

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65861' 
 Execution Time:0.0004889965057373

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65861' 
 Execution Time:0.00037693977355957

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65862' 
 Execution Time:0.00042295455932617

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65862' 
 Execution Time:0.00038886070251465

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65863' 
 Execution Time:0.00045609474182129

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65863' 
 Execution Time:0.00041699409484863

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65864' 
 Execution Time:0.00044703483581543

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65864' 
 Execution Time:0.00035905838012695

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65865' 
 Execution Time:0.00045013427734375

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65865' 
 Execution Time:0.00040793418884277

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65866' 
 Execution Time:0.00046181678771973

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65866' 
 Execution Time:0.00037407875061035

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65867' 
 Execution Time:0.00066900253295898

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65867' 
 Execution Time:0.00059604644775391

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65868' 
 Execution Time:0.00081300735473633

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65868' 
 Execution Time:0.00055503845214844

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65869' 
 Execution Time:0.00058603286743164

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65869' 
 Execution Time:0.00045108795166016

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65870' 
 Execution Time:0.00052404403686523

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65870' 
 Execution Time:0.00051403045654297

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65871' 
 Execution Time:0.00048303604125977

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65871' 
 Execution Time:0.00041007995605469

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65872' 
 Execution Time:0.00051116943359375

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65872' 
 Execution Time:0.00045680999755859

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65873' 
 Execution Time:0.00065279006958008

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65873' 
 Execution Time:0.00044918060302734

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65874' 
 Execution Time:0.00052499771118164

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65874' 
 Execution Time:0.00041890144348145

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65875' 
 Execution Time:0.00049781799316406

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65875' 
 Execution Time:0.00050497055053711

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65877' 
 Execution Time:0.00058412551879883

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65877' 
 Execution Time:0.00049996376037598

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65876' 
 Execution Time:0.00051498413085938

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65876' 
 Execution Time:0.00051403045654297

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65878' 
 Execution Time:0.0004878044128418

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65878' 
 Execution Time:0.00039887428283691

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65880' 
 Execution Time:0.00066304206848145

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65880' 
 Execution Time:0.00046992301940918

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65879' 
 Execution Time:0.00055503845214844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65879' 
 Execution Time:0.00041294097900391

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65881' 
 Execution Time:0.00045609474182129

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65881' 
 Execution Time:0.00042605400085449

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65882' 
 Execution Time:0.00049805641174316

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65882' 
 Execution Time:0.00040578842163086

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65859' 
 Execution Time:0.00045108795166016

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65859' 
 Execution Time:0.00044107437133789

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65884' 
 Execution Time:0.00051403045654297

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65884' 
 Execution Time:0.00039196014404297

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65885' 
 Execution Time:0.00050020217895508

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65885' 
 Execution Time:0.00047612190246582

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65886' 
 Execution Time:0.00049781799316406

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65886' 
 Execution Time:0.00043487548828125

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65887' 
 Execution Time:0.00047707557678223

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65887' 
 Execution Time:0.00058794021606445

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65888' 
 Execution Time:0.0006711483001709

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65888' 
 Execution Time:0.00055098533630371

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65889' 
 Execution Time:0.00053691864013672

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65889' 
 Execution Time:0.00043487548828125

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65883' 
 Execution Time:0.00046682357788086

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65883' 
 Execution Time:0.00036883354187012

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65890' 
 Execution Time:0.00039911270141602

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65890' 
 Execution Time:0.00065493583679199

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65891' 
 Execution Time:0.0010170936584473

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65891' 
 Execution Time:0.00048398971557617

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65892' 
 Execution Time:0.00052905082702637

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65892' 
 Execution Time:0.00044894218444824

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65893' 
 Execution Time:0.00054788589477539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65893' 
 Execution Time:0.00044393539428711

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65894' 
 Execution Time:0.00050210952758789

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65894' 
 Execution Time:0.00043177604675293

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65896' 
 Execution Time:0.00050497055053711

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65896' 
 Execution Time:0.00043392181396484

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65897' 
 Execution Time:0.0004889965057373

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65897' 
 Execution Time:0.00044393539428711

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65898' 
 Execution Time:0.00048208236694336

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65898' 
 Execution Time:0.00042915344238281

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65899' 
 Execution Time:0.00054407119750977

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65899' 
 Execution Time:0.00057888031005859

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65900' 
 Execution Time:0.00052499771118164

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65900' 
 Execution Time:0.00042295455932617

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65901' 
 Execution Time:0.00047492980957031

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65901' 
 Execution Time:0.00042295455932617

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65902' 
 Execution Time:0.00047397613525391

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65902' 
 Execution Time:0.00041794776916504

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65903' 
 Execution Time:0.00050497055053711

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65903' 
 Execution Time:0.00042414665222168

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65895' 
 Execution Time:0.0010449886322021

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65895' 
 Execution Time:0.00049996376037598

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65904' 
 Execution Time:0.00052094459533691

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65904' 
 Execution Time:0.00046682357788086

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65906' 
 Execution Time:0.00050902366638184

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65906' 
 Execution Time:0.00045108795166016

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65907' 
 Execution Time:0.00052809715270996

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65907' 
 Execution Time:0.00044584274291992

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65905' 
 Execution Time:0.00053191184997559

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65905' 
 Execution Time:0.00045299530029297

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65908' 
 Execution Time:0.00050592422485352

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65908' 
 Execution Time:0.00044894218444824

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65909' 
 Execution Time:0.00052118301391602

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65909' 
 Execution Time:0.00045609474182129

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65910' 
 Execution Time:0.00049281120300293

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65910' 
 Execution Time:0.0004420280456543

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65911' 
 Execution Time:0.00054001808166504

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65911' 
 Execution Time:0.0004429817199707

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65912' 
 Execution Time:0.0005030632019043

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65912' 
 Execution Time:0.00045204162597656

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65917' 
 Execution Time:0.00054597854614258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65917' 
 Execution Time:0.00052094459533691

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65919' 
 Execution Time:0.00069808959960938

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65919' 
 Execution Time:0.00053215026855469

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65921' 
 Execution Time:0.0005500316619873

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65921' 
 Execution Time:0.00071382522583008

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65923' 
 Execution Time:0.00058794021606445

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65923' 
 Execution Time:0.00072693824768066

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65925' 
 Execution Time:0.00067591667175293

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65925' 
 Execution Time:0.00052905082702637

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65928' 
 Execution Time:0.00060701370239258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65928' 
 Execution Time:0.00051999092102051

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65936' 
 Execution Time:0.00053882598876953

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65936' 
 Execution Time:0.00046992301940918

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65940' 
 Execution Time:0.00054812431335449

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65940' 
 Execution Time:0.00048995018005371

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65939' 
 Execution Time:0.00056886672973633

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65939' 
 Execution Time:0.00048208236694336

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65944' 
 Execution Time:0.00054097175598145

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65944' 
 Execution Time:0.00047206878662109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '493' 
 Execution Time:0.00055599212646484

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
GROUP BY `payment_type` 
 Execution Time:0.0012531280517578

SELECT SUM(subtotal) AS subtotal, SUM(tax) AS tax, SUM(total) AS total, SUM(cost) AS cost, SUM(profit) AS profit
FROM `ospos_sales_items_temp`
WHERE `employee_id` = '493'
AND `sale_status` = 0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ) 
 Execution Time:0.0017368793487549

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00079607963562012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0007328987121582

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.024320840835571

SELECT GET_LOCK('e9b574b064c988c5084cb16d244401f1', 300) AS ci_session_lock 
 Execution Time:0.0004878044128418

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.00077199935913086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0014398097991943

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.069550037384033

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0022010803222656

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.024808883666992

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00068807601928711

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0008399486541748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00083303451538086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00073409080505371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00062298774719238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074481964111328

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00083613395690918

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount, 2)) AS tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS internal_tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '65514'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.044994115829468

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(payments.payment_type) AS cash_or_transer,
					GROUP_CONCAT(CONCAT((payments.payment_amount - payments.cash_refund))) AS just_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '65514'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.042460918426514

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '65514'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.11159896850586

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, MAX(IFNULL(payments.sale_cash_adjustment, 0)) AS cash_adjustment, MAX(IFNULL(payments.sale_cash_refund, 0)) AS cash_refund, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(IFNULL(payments.sale_payment_amount, 0)) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '65514'
GROUP BY `sales`.`sale_id`
ORDER BY `sales`.`sale_time` ASC 
 Execution Time:0.0015909671783447

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '493' 
 Execution Time:0.00089311599731445

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '65514' 
 Execution Time:0.00074505805969238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00089478492736816

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.0010108947753906

SELECT GET_LOCK('e9b574b064c988c5084cb16d244401f1', 300) AS ci_session_lock 
 Execution Time:0.00044798851013184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.00066089630126953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00089788436889648

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00087404251098633

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013349056243896

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.034809112548828

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00070500373840332

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00078606605529785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063610076904297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074195861816406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074291229248047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065088272094727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00080990791320801

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount, 2)) AS tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS internal_tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '65514'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.027128934860229

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(payments.payment_type) AS cash_or_transer,
					GROUP_CONCAT(CONCAT((payments.payment_amount - payments.cash_refund))) AS just_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '65514'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.015344142913818

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '65514'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.018118143081665

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, MAX(IFNULL(payments.sale_cash_adjustment, 0)) AS cash_adjustment, MAX(IFNULL(payments.sale_cash_refund, 0)) AS cash_refund, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(IFNULL(payments.sale_payment_amount, 0)) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '65514'
GROUP BY `sales`.`sale_id`
ORDER BY `sales`.`sale_time` ASC 
 Execution Time:0.00093793869018555

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '493' 
 Execution Time:0.00087499618530273

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '65514' 
 Execution Time:0.00065517425537109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00056004524230957

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.0012161731719971

SELECT GET_LOCK('e9b574b064c988c5084cb16d244401f1', 300) AS ci_session_lock 
 Execution Time:0.00073099136352539

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.00077009201049805

UPDATE `ospos_sessions` SET `timestamp` = 1657866847, `data` = '__ci_last_regenerate|i:1657866847;person_id|s:2:\"22\";menu_group|s:4:\"home\";cash_rounding|i:0;cash_mode|i:0;sales_mode|s:4:\"sale\";'
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.19995307922363

SELECT RELEASE_LOCK('e9b574b064c988c5084cb16d244401f1') AS ci_session_lock 
 Execution Time:0.00029897689819336

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40jlh5t1iittnvvit16ivcelretrnus5'
AND `ip_address` = '::1' 
 Execution Time:0.0010850429534912

SELECT GET_LOCK('9e8ce3ee5a3a1e7b22bf369e303f4f36', 300) AS ci_session_lock 
 Execution Time:0.00033211708068848

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'k8lc7luae6j400j0dmauul8m10h88clk'
AND `ip_address` = '::1' 
 Execution Time:0.00055503845214844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.14319205284119

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.052726030349731

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058388710021973

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00040698051452637

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.043835878372192

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.020110130310059

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00060892105102539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0018310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.001378059387207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010108947753906

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068306922912598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0015919208526611

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount,2)) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sale_time) BETWEEN '2022-07-08' AND '2022-07-14'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.065805196762085

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE DATE(sale_time) BETWEEN '2022-07-08' AND '2022-07-14'
				GROUP BY sale_id
			) 
 Execution Time:0.66964411735535

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-08' AND '2022-07-14'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.087821006774902

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount,2)) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sale_time) BETWEEN '2022-07-08' AND '2022-07-14'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00047111511230469

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE DATE(sale_time) BETWEEN '2022-07-08' AND '2022-07-14'
				GROUP BY sale_id
			) 
 Execution Time:0.0003960132598877

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-08' AND '2022-07-14'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.074923038482666

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00080108642578125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00073909759521484

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'k8lc7luae6j400j0dmauul8m10h88clk'
AND `ip_address` = '::1' 
 Execution Time:0.0014059543609619

SELECT GET_LOCK('9e8ce3ee5a3a1e7b22bf369e303f4f36', 300) AS ci_session_lock 
 Execution Time:0.0005040168762207

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'k8lc7luae6j400j0dmauul8m10h88clk'
AND `ip_address` = '::1' 
 Execution Time:0.00078201293945312

UPDATE `ospos_sessions` SET `timestamp` = 1657870682, `data` = '__ci_last_regenerate|i:1657870682;person_id|s:2:\"22\";menu_group|s:4:\"home\";cash_rounding|i:0;cash_mode|i:0;sales_mode|s:4:\"sale\";'
WHERE `id` = 'k8lc7luae6j400j0dmauul8m10h88clk'
AND `ip_address` = '::1' 
 Execution Time:0.21092987060547

SELECT RELEASE_LOCK('9e8ce3ee5a3a1e7b22bf369e303f4f36') AS ci_session_lock 
 Execution Time:0.00038981437683105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'k8lc7luae6j400j0dmauul8m10h88clk'
AND `ip_address` = '::1' 
 Execution Time:0.00061202049255371

SELECT GET_LOCK('998f59583773fdf8c5e97386c995fee6', 300) AS ci_session_lock 
 Execution Time:0.00043606758117676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.028148889541626

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00096607208251953

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0010178089141846

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0017189979553223

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0036020278930664

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0011870861053467

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014231204986572

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065207481384277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078201293945312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00095200538635254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00092005729675293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078606605529785

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.00097298622131348

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.000701904296875

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00049114227294922

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00046491622924805

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00045204162597656

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0004429817199707

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.0016350746154785

SELECT GET_LOCK('998f59583773fdf8c5e97386c995fee6', 300) AS ci_session_lock 
 Execution Time:0.00048685073852539

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.00071001052856445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011160373687744

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00080490112304688

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012180805206299

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00055909156799316

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00056219100952148

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0038228034973145

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00064206123352051

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00085902214050293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00060510635375977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011720657348633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.001288890838623

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059199333190918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00062417984008789

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0016720294952393

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.054155111312866

SELECT GET_LOCK('998f59583773fdf8c5e97386c995fee6', 300) AS ci_session_lock 
 Execution Time:0.00046896934509277

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.00049614906311035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010488033294678

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00081706047058105

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011751651763916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00047802925109863

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0025019645690918

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0006721019744873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066804885864258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006561279296875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065302848815918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00053215026855469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00060296058654785

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount,2)) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sale_time) BETWEEN '2022-06-16' AND '2022-07-15'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.024041891098022

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE DATE(sale_time) BETWEEN '2022-06-16' AND '2022-07-15'
				GROUP BY sale_id
			) 
 Execution Time:0.59359002113342

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-06-16' AND '2022-07-15'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.37822294235229

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount,2)) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sale_time) BETWEEN '2022-06-16' AND '2022-07-15'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00039410591125488

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE DATE(sale_time) BETWEEN '2022-06-16' AND '2022-07-15'
				GROUP BY sale_id
			) 
 Execution Time:0.00039482116699219

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-06-16' AND '2022-07-15'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.14829206466675

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058579444885254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0004889965057373

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.0088620185852051

SELECT GET_LOCK('998f59583773fdf8c5e97386c995fee6', 300) AS ci_session_lock 
 Execution Time:0.00043296813964844

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.00062417984008789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010130405426025

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0011608600616455

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011730194091797

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.003572940826416

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00062990188598633

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00086879730224609

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00086212158203125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00083708763122559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00076198577880859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0013542175292969

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.00068497657775879

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.0003809928894043

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00092101097106934

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0006558895111084

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0014791488647461

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00086617469787598

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00056695938110352

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.00098013877868652

SELECT GET_LOCK('998f59583773fdf8c5e97386c995fee6', 300) AS ci_session_lock 
 Execution Time:0.00046396255493164

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.0007011890411377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0014359951019287

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.019853115081787

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.033466100692749

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00098085403442383

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.012158870697021

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0046060085296631

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00066280364990234

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00095200538635254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068402290344238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052690505981445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00067520141601562

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0011060237884521

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.00096797943115234

SELECT GET_LOCK('998f59583773fdf8c5e97386c995fee6', 300) AS ci_session_lock 
 Execution Time:0.0003972053527832

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'n5hsloc0mbujfa0t83nufnfa1sgikea3'
AND `ip_address` = '::1' 
 Execution Time:0.00055384635925293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0014810562133789

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.019320011138916

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0017249584197998

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068807601928711

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.019556999206543

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.003777027130127

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00059318542480469

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00084495544433594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075888633728027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00056600570678711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068783760070801

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount,2)) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sale_time) BETWEEN '2022-07-09' AND '2022-07-15'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0023760795593262

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE DATE(sale_time) BETWEEN '2022-07-09' AND '2022-07-15'
				GROUP BY sale_id
			) 
 Execution Time:0.4476170539856

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-09' AND '2022-07-15'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.10663318634033

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount,2)) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sale_time) BETWEEN '2022-07-09' AND '2022-07-15'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0004119873046875

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE DATE(sale_time) BETWEEN '2022-07-09' AND '2022-07-15'
				GROUP BY sale_id
			) 
 Execution Time:0.00033998489379883

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-09' AND '2022-07-15'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.075528144836426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006101131439209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059103965759277

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '90rmmi1b9gf4e91gmi4jk26tc8tu8ph2'
AND `ip_address` = '::1' 
 Execution Time:0.36210894584656

SELECT GET_LOCK('14134d4474f64e5c070e2f8c69c12878', 300) AS ci_session_lock 
 Execution Time:0.00041985511779785

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '90rmmi1b9gf4e91gmi4jk26tc8tu8ph2'
AND `ip_address` = '::1' 
 Execution Time:0.00091099739074707

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:3.7009479999542

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.04471492767334

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.2355318069458

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.0019798278808594

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.29805493354797


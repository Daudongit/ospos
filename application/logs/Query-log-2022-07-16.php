SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ej16urauvovheq5057bf9h46drr8i4kb'
AND `ip_address` = '::1' 
 Execution Time:0.091248989105225

SELECT GET_LOCK('a305a9eb84984d1048e1019d4c343476', 300) AS ci_session_lock 
 Execution Time:0.0011558532714844

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ej16urauvovheq5057bf9h46drr8i4kb'
AND `ip_address` = '::1' 
 Execution Time:0.031242847442627

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.4889030456543

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.085951805114746

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0071101188659668

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.0015110969543457

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.001060962677002

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ej16urauvovheq5057bf9h46drr8i4kb'
AND `ip_address` = '::1' 
 Execution Time:0.001594066619873

SELECT GET_LOCK('a305a9eb84984d1048e1019d4c343476', 300) AS ci_session_lock 
 Execution Time:0.00039291381835938

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ej16urauvovheq5057bf9h46drr8i4kb'
AND `ip_address` = '::1' 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.15836691856384

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.10784888267517

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.099639177322388

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.12263607978821

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0012288093566895

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0015602111816406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0014560222625732

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00084304809570312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00082993507385254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010800361633301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0008997917175293

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ej16urauvovheq5057bf9h46drr8i4kb'
AND `ip_address` = '::1' 
 Execution Time:0.00084590911865234

SELECT GET_LOCK('a305a9eb84984d1048e1019d4c343476', 300) AS ci_session_lock 
 Execution Time:0.00042080879211426

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ej16urauvovheq5057bf9h46drr8i4kb'
AND `ip_address` = '::1' 
 Execution Time:0.00052690505981445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.01860499382019

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.022274971008301

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001054048538208

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.13187718391418

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.20740294456482

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00085210800170898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00070619583129883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006859302520752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00069308280944824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081920623779297

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.0016489028930664

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00047111511230469

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00033807754516602

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00032901763916016

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00033807754516602

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00033283233642578

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00033092498779297

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00033903121948242

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ej16urauvovheq5057bf9h46drr8i4kb'
AND `ip_address` = '::1' 
 Execution Time:0.022561073303223

SELECT GET_LOCK('a305a9eb84984d1048e1019d4c343476', 300) AS ci_session_lock 
 Execution Time:0.00047898292541504

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ej16urauvovheq5057bf9h46drr8i4kb'
AND `ip_address` = '::1' 
 Execution Time:0.00070285797119141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.001399040222168

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0013570785522461

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0019128322601318

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078105926513672

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00057387351989746

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.040191888809204

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00079989433288574

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00092697143554688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078701972961426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00094699859619141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00076818466186523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.000885009765625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081992149353027

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.12632513046265

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4nsspg1pq13g139hc8i8u9ka9394eqrl'
AND `ip_address` = '::1' 
 Execution Time:0.073676109313965

SELECT GET_LOCK('19e930f7886dcc53618579b2ef626e67', 300) AS ci_session_lock 
 Execution Time:0.056993961334229

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4nsspg1pq13g139hc8i8u9ka9394eqrl'
AND `ip_address` = '::1' 
 Execution Time:0.0011529922485352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.053945064544678

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0010180473327637

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014181137084961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006561279296875

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.043828010559082

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.028836011886597

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00086498260498047

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00097894668579102

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00086498260498047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081610679626465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.000946044921875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0009610652923584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074005126953125

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0042538642883301

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.49766206741333

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.2200939655304

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00072598457336426

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.0007321834564209

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.11227893829346

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16')
GROUP BY `payment_type` 
 Execution Time:0.11493992805481

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16')
GROUP BY `payment_type` 
 Execution Time:0.28635907173157

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0016860961914062

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0016200542449951

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '53f7f3ofhk6ndqht1g9gpc24t89us6og'
AND `ip_address` = '::1' 
 Execution Time:0.028297901153564

SELECT GET_LOCK('778e5d2cb673e92af054a9c84936e93d', 300) AS ci_session_lock 
 Execution Time:0.00039100646972656

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '53f7f3ofhk6ndqht1g9gpc24t89us6og'
AND `ip_address` = '::1' 
 Execution Time:0.00046396255493164

UPDATE `ospos_sessions` SET `timestamp` = 1657970597, `data` = '__ci_last_regenerate|i:1657970597;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = '53f7f3ofhk6ndqht1g9gpc24t89us6og'
AND `ip_address` = '::1' 
 Execution Time:0.12225198745728

SELECT RELEASE_LOCK('778e5d2cb673e92af054a9c84936e93d') AS ci_session_lock 
 Execution Time:0.00087308883666992

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '53f7f3ofhk6ndqht1g9gpc24t89us6og'
AND `ip_address` = '::1' 
 Execution Time:0.10987687110901

SELECT GET_LOCK('45a2cc7ad5ac374addc7130c9b32cf04', 300) AS ci_session_lock 
 Execution Time:0.00088286399841309

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '3n4n0fu6sc3jnoe4b5jcumutopghd9m8'
AND `ip_address` = '::1' 
 Execution Time:0.05012583732605

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.028124094009399

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.021172046661377

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0038521289825439

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0017499923706055

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0012099742889404

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.097937822341919

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0004727840423584

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00066804885864258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066494941711426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074100494384766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00067496299743652

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066304206848145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063586235046387

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.12507700920105

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.29202795028687

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.071959018707275

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00058293342590332

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00066781044006348

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.066320180892944

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND `sale_status` =0
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16')
GROUP BY `payment_type` 
 Execution Time:0.0021359920501709

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND `sale_status` =0
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16')
GROUP BY `payment_type` 
 Execution Time:0.065176010131836

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059294700622559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00050091743469238

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '3n4n0fu6sc3jnoe4b5jcumutopghd9m8'
AND `ip_address` = '::1' 
 Execution Time:0.0010700225830078

SELECT GET_LOCK('45a2cc7ad5ac374addc7130c9b32cf04', 300) AS ci_session_lock 
 Execution Time:0.00047588348388672

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '3n4n0fu6sc3jnoe4b5jcumutopghd9m8'
AND `ip_address` = '::1' 
 Execution Time:0.00062394142150879

UPDATE `ospos_sessions` SET `timestamp` = 1657971030, `data` = '__ci_last_regenerate|i:1657971030;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = '3n4n0fu6sc3jnoe4b5jcumutopghd9m8'
AND `ip_address` = '::1' 
 Execution Time:0.1173689365387

SELECT RELEASE_LOCK('45a2cc7ad5ac374addc7130c9b32cf04') AS ci_session_lock 
 Execution Time:0.0007929801940918

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '3n4n0fu6sc3jnoe4b5jcumutopghd9m8'
AND `ip_address` = '::1' 
 Execution Time:0.0012869834899902

SELECT GET_LOCK('de6e3a25c8408d912ac3f41704f75720', 300) AS ci_session_lock 
 Execution Time:0.022045135498047

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hi46n9uasd9b5nvkb9er09s61gtpilnf'
AND `ip_address` = '::1' 
 Execution Time:0.0018310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00089287757873535

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00073695182800293

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010449886322021

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052309036254883

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00047588348388672

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.030420064926147

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00054788589477539

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0007169246673584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064206123352051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068998336791992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078892707824707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075292587280273

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.032376050949097

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.39352893829346

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.056751012802124

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00043416023254395

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.0003819465637207

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.059900999069214

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND `sale_status` =0
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16')
GROUP BY `payment_type` 
 Execution Time:0.0022048950195312

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND `sale_status` =0
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16')
GROUP BY `payment_type` 
 Execution Time:0.077741861343384

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00046515464782715

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hi46n9uasd9b5nvkb9er09s61gtpilnf'
AND `ip_address` = '::1' 
 Execution Time:0.0023949146270752

SELECT GET_LOCK('de6e3a25c8408d912ac3f41704f75720', 300) AS ci_session_lock 
 Execution Time:0.00043106079101562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hi46n9uasd9b5nvkb9er09s61gtpilnf'
AND `ip_address` = '::1' 
 Execution Time:0.00054383277893066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010111331939697

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00095891952514648

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011501312255859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0072500705718994

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00045609474182129

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0032341480255127

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00072407722473145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010221004486084

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00051593780517578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064516067504883

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.014403104782104

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.23230504989624

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.072252035140991

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00041985511779785

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00037693977355957

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.05539083480835

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0021090507507324

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.056978940963745

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064706802368164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00050997734069824

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hi46n9uasd9b5nvkb9er09s61gtpilnf'
AND `ip_address` = '::1' 
 Execution Time:0.00092601776123047

SELECT GET_LOCK('de6e3a25c8408d912ac3f41704f75720', 300) AS ci_session_lock 
 Execution Time:0.00039410591125488

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hi46n9uasd9b5nvkb9er09s61gtpilnf'
AND `ip_address` = '::1' 
 Execution Time:0.00065016746520996

UPDATE `ospos_sessions` SET `timestamp` = 1657971548, `data` = '__ci_last_regenerate|i:1657971548;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'hi46n9uasd9b5nvkb9er09s61gtpilnf'
AND `ip_address` = '::1' 
 Execution Time:0.069638013839722

SELECT RELEASE_LOCK('de6e3a25c8408d912ac3f41704f75720') AS ci_session_lock 
 Execution Time:0.00031900405883789

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'hi46n9uasd9b5nvkb9er09s61gtpilnf'
AND `ip_address` = '::1' 
 Execution Time:0.00077986717224121

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.01398491859436

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00051689147949219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0017919540405273

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00069689750671387

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011699199676514

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00048208236694336

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0014679431915283

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0029261112213135

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044488906860352

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0013198852539062

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00050115585327148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00041890144348145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059890747070312

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0021829605102539

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.40049290657043

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.081912040710449

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00042200088500977

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00035190582275391

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.069078922271729

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006108283996582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00047087669372559

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.013713121414185

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.00040006637573242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.001349925994873

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0012190341949463

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0017900466918945

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.025124073028564

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00068807601928711

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00096583366394043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074005126953125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00096893310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078988075256348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00070285797119141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0008389949798584

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.0010221004486084

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0006709098815918

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00063610076904297

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00058579444885254

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00059795379638672

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00063514709472656

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00059413909912109

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.0005800724029541

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.0074398517608643

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.00037908554077148

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00054001808166504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00091981887817383

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0007472038269043

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0018019676208496

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00085902214050293

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00061798095703125

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0027821063995361

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00059390068054199

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00080990791320801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00067901611328125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00085091590881348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010139942169189

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00060892105102539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.028575897216797

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.0011458396911621

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.00046396255493164

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00069499015808105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00092005729675293

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0017039775848389

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.055990934371948

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00059008598327637

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0023419857025146

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058078765869141

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00071382522583008

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00087499618530273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074195861816406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00076508522033691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068497657775879

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
					SUM(ROUND(sales_items_taxes.item_tax_amount,2)) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.013422966003418

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.28161406517029

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.10453987121582

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00037503242492676

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00030112266540527

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
 ) 
 Execution Time:0.060995817184448

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00095415115356445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00060296058654785

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00088000297546387

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.00046801567077637

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00078821182250977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00083684921264648

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00074291229248047

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001676082611084

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.003180980682373

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0011379718780518

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.001244068145752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075411796569824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011701583862305

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00095701217651367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078797340393066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011160373687744

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.00072908401489258

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0011429786682129

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00061202049255371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00052213668823242

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00051403045654297

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00045585632324219

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00047516822814941

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00099778175354004

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.00049805641174316

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00075197219848633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0013458728790283

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0013351440429688

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014519691467285

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.012586832046509

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00070881843566895

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.012037992477417

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00060677528381348

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00097107887268066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00080585479736328

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011789798736572

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075912475585938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078392028808594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0015079975128174

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.0012409687042236

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.00039315223693848

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00056219100952148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00098204612731934

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00078916549682617

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014870166778564

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058317184448242

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.016580820083618

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0025739669799805

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00052404403686523

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0007941722869873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081586837768555

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0007328987121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011861324310303

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0022079944610596

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.29348301887512

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 1
AND `sales`.`sale_type` = 3
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.030941963195801

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00037598609924316

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00030803680419922

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 1
AND `sales`.`sale_type` = 3 
 Execution Time:0.027062177658081

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006411075592041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052499771118164

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.0007789134979248

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.00045895576477051

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00053286552429199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0014140605926514

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.001215934753418

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001676082611084

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0038530826568604

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.001072883605957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00080609321594238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075316429138184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00076007843017578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074195861816406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00079679489135742

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.00074911117553711

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00042510032653809

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00074195861816406

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00059413909912109

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00097107887268066

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00046491622924805

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00092005729675293

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.0004279613494873

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00054216384887695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010139942169189

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0010459423065186

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00187087059021

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00079584121704102

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00063300132751465

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0026700496673584

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00081515312194824

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00076889991760254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065112113952637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00071597099304199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065302848815918

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0011920928955078

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00079917907714844

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.00047206878662109

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00069117546081543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0016272068023682

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0009620189666748

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013258457183838

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058484077453613

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00047922134399414

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.00337815284729

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00070595741271973

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00095200538635254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0008089542388916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.000701904296875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00062322616577148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059890747070312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00062108039855957

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0022881031036377

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.32956099510193

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
AND `sales`.`sale_status` = 2
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.029145002365112

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00036406517028809

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00029087066650391

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
AND `sales`.`sale_status` = 2 
 Execution Time:0.033324003219604

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059390068054199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00046110153198242

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00079703330993652

SELECT GET_LOCK('a1079c93bde4d6f232e152718facd913', 300) AS ci_session_lock 
 Execution Time:0.00047993659973145

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00058197975158691

UPDATE `ospos_sessions` SET `timestamp` = 1657971856, `data` = '__ci_last_regenerate|i:1657971856;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.091080188751221

SELECT RELEASE_LOCK('a1079c93bde4d6f232e152718facd913') AS ci_session_lock 
 Execution Time:0.00031399726867676

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'it6r3u4epu647n7ukvumjaekm5q04hri'
AND `ip_address` = '::1' 
 Execution Time:0.00072097778320312

SELECT GET_LOCK('64141bfad94bc3839065041edbe05849', 300) AS ci_session_lock 
 Execution Time:0.018878936767578

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00066518783569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00099706649780273

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00074005126953125

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0019149780273438

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0033118724822998

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00069999694824219

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00094294548034668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00060796737670898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010371208190918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052380561828613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00061678886413574

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.00074505805969238

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00047683715820312

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.0013179779052734

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00074005126953125

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00048208236694336

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00045299530029297

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00069284439086914

SELECT GET_LOCK('64141bfad94bc3839065041edbe05849', 300) AS ci_session_lock 
 Execution Time:0.00048708915710449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.025903940200806

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00099802017211914

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0007631778717041

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.038248062133789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081205368041992

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0005958080291748

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0023751258850098

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00069212913513184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.000701904296875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00070381164550781

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00070500373840332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068306922912598

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0015590190887451

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00080609321594238

SELECT GET_LOCK('64141bfad94bc3839065041edbe05849', 300) AS ci_session_lock 
 Execution Time:0.00037407875061035

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00046992301940918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00079798698425293

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00069618225097656

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010340213775635

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00051712989807129

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00041699409484863

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0021250247955322

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046992301940918

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00051307678222656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059103965759277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00047707557678223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00046706199645996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00057601928710938

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0019950866699219

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.27384305000305

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 1
AND `sales`.`sale_type` = 3
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.031709909439087

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00041580200195312

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00039505958557129

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 1
AND `sales`.`sale_type` = 3 
 Execution Time:0.028280973434448

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063014030456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00054693222045898

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00061297416687012

SELECT GET_LOCK('64141bfad94bc3839065041edbe05849', 300) AS ci_session_lock 
 Execution Time:0.00037288665771484

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00048112869262695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00081086158752441

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058794021606445

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00054383277893066

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0016548633575439

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044918060302734

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00056886672973633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068902969360352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00060582160949707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00053310394287109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00051283836364746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00061917304992676

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0016181468963623

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.37696814537048

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 1
AND `sales`.`sale_type` = 3
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.052223920822144

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00049614906311035

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00040602684020996

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 1
AND `sales`.`sale_type` = 3 
 Execution Time:0.032834053039551

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.000579833984375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00049018859863281

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00074505805969238

SELECT GET_LOCK('64141bfad94bc3839065041edbe05849', 300) AS ci_session_lock 
 Execution Time:0.00040292739868164

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00066399574279785

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089406967163086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00053095817565918

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00094389915466309

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0017998218536377

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059413909912109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00046491622924805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059700012207031

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0017919540405273

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.26262998580933

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 1
AND `sales`.`sale_type` = 3
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.028506994247437

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00042104721069336

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00038385391235352

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 1
AND `sales`.`sale_type` = 3 
 Execution Time:0.029948949813843

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00094103813171387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063800811767578

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00093388557434082

SELECT GET_LOCK('64141bfad94bc3839065041edbe05849', 300) AS ci_session_lock 
 Execution Time:0.00043511390686035

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00063180923461914

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0009150505065918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0010080337524414

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001054048538208

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0036840438842773

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.045682907104492

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00084185600280762

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006248950958252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059103965759277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0005490779876709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066804885864258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065302848815918

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.00074410438537598

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00055408477783203

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.0010480880737305

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00064301490783691

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0005488395690918

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0005497932434082

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00049614906311035

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00077986717224121

SELECT GET_LOCK('64141bfad94bc3839065041edbe05849', 300) AS ci_session_lock 
 Execution Time:0.00046396255493164

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00077700614929199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006709098815918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00083494186401367

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010647773742676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00088596343994141

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00054502487182617

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0029590129852295

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00072693824768066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0007481575012207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00072717666625977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00071310997009277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00070691108703613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0007631778717041

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0015771389007568

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00092911720275879

SELECT GET_LOCK('64141bfad94bc3839065041edbe05849', 300) AS ci_session_lock 
 Execution Time:0.00050592422485352

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.00081205368041992

UPDATE `ospos_sessions` SET `timestamp` = 1657972199, `data` = '__ci_last_regenerate|i:1657972199;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.061119079589844

SELECT RELEASE_LOCK('64141bfad94bc3839065041edbe05849') AS ci_session_lock 
 Execution Time:0.0003511905670166

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'tgq6ia9tdkg8f4g572i55c9oogaeqt7g'
AND `ip_address` = '::1' 
 Execution Time:0.0005500316619873

SELECT GET_LOCK('27b57849675ab9370735493ea62360f4', 300) AS ci_session_lock 
 Execution Time:0.00040006637573242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bsqa93bp0jqkc57fs2s6gdv2rt5bpmb4'
AND `ip_address` = '::1' 
 Execution Time:0.00051999092102051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00082707405090332

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00084614753723145

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012190341949463

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00071907043457031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00068402290344238

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0031650066375732

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058388710021973

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00074505805969238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066208839416504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059795379638672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059294700622559

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.003558874130249

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.34768795967102

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.076963901519775

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00039505958557129

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.0003049373626709

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.062186002731323

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0048611164093018

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.082453966140747

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0005950927734375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00046992301940918

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bsqa93bp0jqkc57fs2s6gdv2rt5bpmb4'
AND `ip_address` = '::1' 
 Execution Time:0.0013120174407959

SELECT GET_LOCK('27b57849675ab9370735493ea62360f4', 300) AS ci_session_lock 
 Execution Time:0.00066494941711426

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bsqa93bp0jqkc57fs2s6gdv2rt5bpmb4'
AND `ip_address` = '::1' 
 Execution Time:0.00092697143554688

UPDATE `ospos_sessions` SET `timestamp` = 1657973005, `data` = '__ci_last_regenerate|i:1657973005;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'bsqa93bp0jqkc57fs2s6gdv2rt5bpmb4'
AND `ip_address` = '::1' 
 Execution Time:0.096426963806152

SELECT RELEASE_LOCK('27b57849675ab9370735493ea62360f4') AS ci_session_lock 
 Execution Time:0.00034689903259277

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'bsqa93bp0jqkc57fs2s6gdv2rt5bpmb4'
AND `ip_address` = '::1' 
 Execution Time:0.00050592422485352

SELECT GET_LOCK('c5b5a0403111468a34a1dcb7cb766dfa', 300) AS ci_session_lock 
 Execution Time:0.00028204917907715

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9i45krnptaup0pgc7qdl92fcf7u4uim5'
AND `ip_address` = '::1' 
 Execution Time:0.00039815902709961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0008690357208252

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0016129016876221

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0013570785522461

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00072693824768066

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0005948543548584

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0035150051116943

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00068116188049316

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00089097023010254

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0015189647674561

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00090813636779785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074505805969238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00071597099304199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00084304809570312

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.006403923034668

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.41035199165344

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.070847034454346

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00039887428283691

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00034499168395996

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.057070970535278

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.002187967300415

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`payment_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.063555002212524

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063896179199219

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.22183895111084

SELECT GET_LOCK('7c2c3b41f5cd0aa301b523738248e9a8', 300) AS ci_session_lock 
 Execution Time:0.00094103813171387

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.061385154724121

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.44517397880554

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0082721710205078

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0157790184021

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.021785020828247

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010960102081299

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.0013329982757568

SELECT GET_LOCK('7c2c3b41f5cd0aa301b523738248e9a8', 300) AS ci_session_lock 
 Execution Time:0.00039792060852051

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.00047087669372559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.016330003738403

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.04281210899353

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.03417181968689

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0078890323638916

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0013978481292725

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014309883117676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00071191787719727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059103965759277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063014030456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00060296058654785

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.0013339519500732

SELECT GET_LOCK('7c2c3b41f5cd0aa301b523738248e9a8', 300) AS ci_session_lock 
 Execution Time:0.00043582916259766

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.00066399574279785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0013260841369629

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0012040138244629

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.016536951065063

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.088541030883789

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00069499015808105

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00085091590881348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059390068054199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00053691864013672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052404403686523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066685676574707

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.00098395347595215

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00050783157348633

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0005488395690918

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0005791187286377

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00054407119750977

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00052595138549805

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.00087189674377441

SELECT GET_LOCK('7c2c3b41f5cd0aa301b523738248e9a8', 300) AS ci_session_lock 
 Execution Time:0.00048995018005371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.00072693824768066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0015518665313721

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0012588500976562

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0019159317016602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0009150505065918

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.027681112289429

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.090984106063843

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00063490867614746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063681602478027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.016638040542603

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063014030456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059413909912109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00067305564880371

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.22074484825134

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.029233932495117

SELECT GET_LOCK('7c2c3b41f5cd0aa301b523738248e9a8', 300) AS ci_session_lock 
 Execution Time:0.00042581558227539

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.015960931777954

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00086617469787598

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.028316974639893

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00069808959960938

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00062894821166992

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.041424036026001

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0017600059509277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0016930103302002

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075292587280273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00077009201049805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0007631778717041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00087499618530273

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.43368196487427

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:1.1422519683838

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.13664102554321

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00039482116699219

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00036001205444336

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.070963859558105

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.064383983612061

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.45201706886292

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00076913833618164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059700012207031

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.024325847625732

SELECT GET_LOCK('7c2c3b41f5cd0aa301b523738248e9a8', 300) AS ci_session_lock 
 Execution Time:0.00049614906311035

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.00064706802368164

UPDATE `ospos_sessions` SET `timestamp` = 1657986501, `data` = '__ci_last_regenerate|i:1657986501;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.086483955383301

SELECT RELEASE_LOCK('7c2c3b41f5cd0aa301b523738248e9a8') AS ci_session_lock 
 Execution Time:0.00054812431335449

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'kf36c2ske72qngrp3vpv7410i6d0mico'
AND `ip_address` = '::1' 
 Execution Time:0.00089192390441895

SELECT GET_LOCK('2d121959a616e891538e1f2f641926dc', 300) AS ci_session_lock 
 Execution Time:0.098919868469238

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.0012321472167969

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0012540817260742

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00081491470336914

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0093379020690918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0005640983581543

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00046014785766602

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.10370588302612

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.024428844451904

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.001255989074707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00073504447937012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075316429138184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066208839416504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00072789192199707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068211555480957

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.040837049484253

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.41574096679688

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.17704486846924

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0010349750518799

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.0012071132659912

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.06842303276062

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0018999576568604

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.063322067260742

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00061416625976562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00045514106750488

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.042740106582642

SELECT GET_LOCK('2d121959a616e891538e1f2f641926dc', 300) AS ci_session_lock 
 Execution Time:0.00042200088500977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011370182037354

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0009300708770752

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001694917678833

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.016977071762085

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00056004524230957

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00063014030456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064301490783691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0005347728729248

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00060105323791504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00080084800720215

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.00075721740722656

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00060820579528809

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00080180168151855

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.0008549690246582

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00064706802368164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00063490867614746

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.017452955245972

SELECT GET_LOCK('2d121959a616e891538e1f2f641926dc', 300) AS ci_session_lock 
 Execution Time:0.00038409233093262

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00091981887817383

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00072598457336426

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00098109245300293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.011771202087402

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00046300888061523

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.040804147720337

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00054216384887695

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0007169246673584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00050783157348633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0004420280456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00047016143798828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00057792663574219

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.036195039749146

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.022880792617798

SELECT GET_LOCK('2d121959a616e891538e1f2f641926dc', 300) AS ci_session_lock 
 Execution Time:0.00049400329589844

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.0011529922485352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.019569158554077

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0013730525970459

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0022060871124268

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00083398818969727

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00068306922912598

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.093410968780518

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00092482566833496

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058794021606445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0005638599395752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00045990943908691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0004417896270752

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059700012207031

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0023729801177979

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.81565189361572

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.77391004562378

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00067901611328125

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00061392784118652

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.12805390357971

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0034680366516113

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.30908703804016

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.09502100944519

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.15005302429199

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.14089798927307

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.038876056671143

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011301040649414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00098896026611328

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.00089097023010254

SELECT GET_LOCK('2d121959a616e891538e1f2f641926dc', 300) AS ci_session_lock 
 Execution Time:0.00038409233093262

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.00046181678771973

UPDATE `ospos_sessions` SET `timestamp` = 1657986897, `data` = '__ci_last_regenerate|i:1657986897;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.057039976119995

SELECT RELEASE_LOCK('2d121959a616e891538e1f2f641926dc') AS ci_session_lock 
 Execution Time:0.00032305717468262

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ptvbrvbndrj793n4takkq0ct0a0q375b'
AND `ip_address` = '::1' 
 Execution Time:0.00048398971557617

SELECT GET_LOCK('4e3b9420dbaecc070a399344d6d9ecb9', 300) AS ci_session_lock 
 Execution Time:0.018447160720825

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0af7p0u80h77vbukjr0htgn22p3lsutj'
AND `ip_address` = '::1' 
 Execution Time:0.00049901008605957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081992149353027

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00076603889465332

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001021146774292

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00047707557678223

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0007469654083252

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.041027069091797

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00052595138549805

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00065088272094727

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052905082702637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052976608276367

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00046205520629883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00057315826416016

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.022718906402588

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.43553590774536

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.16120481491089

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0003819465637207

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00029397010803223

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.15623807907104

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0019760131835938

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.068734884262085

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.045434951782227

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.076514005661011

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.022519826889038

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0049600601196289

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00057482719421387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00045204162597656

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0af7p0u80h77vbukjr0htgn22p3lsutj'
AND `ip_address` = '::1' 
 Execution Time:0.0022380352020264

SELECT GET_LOCK('4e3b9420dbaecc070a399344d6d9ecb9', 300) AS ci_session_lock 
 Execution Time:0.00091099739074707

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0af7p0u80h77vbukjr0htgn22p3lsutj'
AND `ip_address` = '::1' 
 Execution Time:0.0011329650878906

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0015408992767334

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0011160373687744

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0015411376953125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00093293190002441

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00070095062255859

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.02855110168457

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00092983245849609

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0012979507446289

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00087213516235352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078678131103516

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00088405609130859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00098681449890137

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00086283683776855

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.066132068634033

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.61877512931824

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.19898700714111

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.001025915145874

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.0013608932495117

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.2054500579834

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0035772323608398

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.15062308311462

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.061564922332764

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.089027166366577

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.02659797668457

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0044078826904297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00067305564880371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00057792663574219

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0af7p0u80h77vbukjr0htgn22p3lsutj'
AND `ip_address` = '::1' 
 Execution Time:0.011738061904907

SELECT GET_LOCK('4e3b9420dbaecc070a399344d6d9ecb9', 300) AS ci_session_lock 
 Execution Time:0.00085616111755371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0af7p0u80h77vbukjr0htgn22p3lsutj'
AND `ip_address` = '::1' 
 Execution Time:0.0011048316955566

UPDATE `ospos_sessions` SET `timestamp` = 1657987823, `data` = '__ci_last_regenerate|i:1657987823;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = '0af7p0u80h77vbukjr0htgn22p3lsutj'
AND `ip_address` = '::1' 
 Execution Time:0.067729949951172

SELECT RELEASE_LOCK('4e3b9420dbaecc070a399344d6d9ecb9') AS ci_session_lock 
 Execution Time:0.0005190372467041

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0af7p0u80h77vbukjr0htgn22p3lsutj'
AND `ip_address` = '::1' 
 Execution Time:0.00077080726623535

SELECT GET_LOCK('22bab3ef9baa5c955cf19d78a459f11b', 300) AS ci_session_lock 
 Execution Time:0.021134853363037

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0qad1ocuhuctbelemh015s1sandu7u4t'
AND `ip_address` = '::1' 
 Execution Time:0.00088191032409668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0060579776763916

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00078511238098145

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010218620300293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0004889965057373

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00039887428283691

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.17424607276917

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010831356048584

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0017099380493164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00057601928710938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00045204162597656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00084710121154785

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0030930042266846

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.57448101043701

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.27063393592834

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00041699409484863

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00032186508178711

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.17473983764648

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0020978450775146

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.085217952728271

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.037055969238281

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.079593896865845

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.020583152770996

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0039398670196533

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00078010559082031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00062084197998047

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0qad1ocuhuctbelemh015s1sandu7u4t'
AND `ip_address` = '::1' 
 Execution Time:0.01094913482666

SELECT GET_LOCK('22bab3ef9baa5c955cf19d78a459f11b', 300) AS ci_session_lock 
 Execution Time:0.00045514106750488

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0qad1ocuhuctbelemh015s1sandu7u4t'
AND `ip_address` = '::1' 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0009160041809082

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00073099136352539

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001823902130127

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.023382902145386

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0004429817199707

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.027276039123535

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0012400150299072

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0016229152679443

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.001270055770874

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0018160343170166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0013539791107178

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0012469291687012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0026209354400635

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.024692058563232

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.4358959197998

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.24212408065796

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0003821849822998

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.0002901554107666

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.12267994880676

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0034711360931396

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.082664966583252

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.032305955886841

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.085569858551025

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.025460004806519

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0043799877166748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063800811767578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00050806999206543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0qad1ocuhuctbelemh015s1sandu7u4t'
AND `ip_address` = '::1' 
 Execution Time:0.044378042221069

SELECT GET_LOCK('22bab3ef9baa5c955cf19d78a459f11b', 300) AS ci_session_lock 
 Execution Time:0.00055503845214844

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0qad1ocuhuctbelemh015s1sandu7u4t'
AND `ip_address` = '::1' 
 Execution Time:0.00079107284545898

UPDATE `ospos_sessions` SET `timestamp` = 1657988349, `data` = '__ci_last_regenerate|i:1657988349;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = '0qad1ocuhuctbelemh015s1sandu7u4t'
AND `ip_address` = '::1' 
 Execution Time:0.17712187767029

SELECT RELEASE_LOCK('22bab3ef9baa5c955cf19d78a459f11b') AS ci_session_lock 
 Execution Time:0.00091814994812012

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0qad1ocuhuctbelemh015s1sandu7u4t'
AND `ip_address` = '::1' 
 Execution Time:0.0013489723205566

SELECT GET_LOCK('1b6e6c0f935991eb3537e4d05d2907a9', 300) AS ci_session_lock 
 Execution Time:0.11119604110718

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dglikiacltbigasa68q5u0klpju3fsvc'
AND `ip_address` = '::1' 
 Execution Time:0.0011930465698242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.015153169631958

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.029592990875244

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0052070617675781

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.024964094161987

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00075602531433105

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.034076929092407

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0011229515075684

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0014688968658447

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010619163513184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00083708763122559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00094819068908691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00076389312744141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00091409683227539

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.010661125183105

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.55691409111023

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.15327405929565

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00041699409484863

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00051021575927734

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.16795110702515

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0023760795593262

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.097007989883423

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.040529012680054

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.097122192382812

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.029627084732056

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0049300193786621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010650157928467

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00070905685424805

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dglikiacltbigasa68q5u0klpju3fsvc'
AND `ip_address` = '::1' 
 Execution Time:0.0010941028594971

SELECT GET_LOCK('1b6e6c0f935991eb3537e4d05d2907a9', 300) AS ci_session_lock 
 Execution Time:0.00042486190795898

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dglikiacltbigasa68q5u0klpju3fsvc'
AND `ip_address` = '::1' 
 Execution Time:0.00057411193847656

UPDATE `ospos_sessions` SET `timestamp` = 1657988797, `data` = '__ci_last_regenerate|i:1657988797;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'dglikiacltbigasa68q5u0klpju3fsvc'
AND `ip_address` = '::1' 
 Execution Time:0.12092399597168

SELECT RELEASE_LOCK('1b6e6c0f935991eb3537e4d05d2907a9') AS ci_session_lock 
 Execution Time:0.00087714195251465

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'dglikiacltbigasa68q5u0klpju3fsvc'
AND `ip_address` = '::1' 
 Execution Time:0.001291036605835

SELECT GET_LOCK('054235562f6ceeb1d5326fbddb433e97', 300) AS ci_session_lock 
 Execution Time:0.031763076782227

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'g46rn0gngnr5mg777gseeino6dekr1sj'
AND `ip_address` = '::1' 
 Execution Time:0.040116786956787

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0009617805480957

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.000885009765625

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012400150299072

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00050806999206543

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00041794776916504

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.035646200180054

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0014951229095459

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0015890598297119

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0015900135040283

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0016140937805176

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0024199485778809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0022940635681152

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0012309551239014

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0022621154785156

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.4035108089447

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.38811111450195

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0005040168762207

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00047206878662109

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.18511891365051

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0018579959869385

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.11075615882874

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.033111095428467

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.07770299911499

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.060020923614502

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.010232925415039

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0005650520324707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00043201446533203

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'g46rn0gngnr5mg777gseeino6dekr1sj'
AND `ip_address` = '::1' 
 Execution Time:0.0014429092407227

SELECT GET_LOCK('054235562f6ceeb1d5326fbddb433e97', 300) AS ci_session_lock 
 Execution Time:0.00053906440734863

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'g46rn0gngnr5mg777gseeino6dekr1sj'
AND `ip_address` = '::1' 
 Execution Time:0.00076913833618164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00082111358642578

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00074410438537598

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010139942169189

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00054407119750977

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00045990943908691

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0028269290924072

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00073790550231934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059008598327637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058794021606445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00055718421936035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052714347839355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00061202049255371

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.016494989395142

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.38932704925537

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.17662715911865

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0005638599395752

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00049185752868652

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.14632201194763

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0018939971923828

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.088531970977783

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.030966997146606

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.069496154785156

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.02038311958313

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0038988590240479

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064206123352051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00049114227294922

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'g46rn0gngnr5mg777gseeino6dekr1sj'
AND `ip_address` = '::1' 
 Execution Time:0.0028989315032959

SELECT GET_LOCK('054235562f6ceeb1d5326fbddb433e97', 300) AS ci_session_lock 
 Execution Time:0.001492977142334

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'g46rn0gngnr5mg777gseeino6dekr1sj'
AND `ip_address` = '::1' 
 Execution Time:0.001676082611084

UPDATE `ospos_sessions` SET `timestamp` = 1657989239, `data` = '__ci_last_regenerate|i:1657989239;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'g46rn0gngnr5mg777gseeino6dekr1sj'
AND `ip_address` = '::1' 
 Execution Time:0.095654010772705

SELECT RELEASE_LOCK('054235562f6ceeb1d5326fbddb433e97') AS ci_session_lock 
 Execution Time:0.00093483924865723

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'g46rn0gngnr5mg777gseeino6dekr1sj'
AND `ip_address` = '::1' 
 Execution Time:0.0010488033294678

SELECT GET_LOCK('f1769cf1d6b1303e658690bf73d79df2', 300) AS ci_session_lock 
 Execution Time:0.066713809967041

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0oca0jvf9d8mndmjlssg4me2mf3bimhc'
AND `ip_address` = '::1' 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00097393989562988

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00079488754272461

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010788440704346

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00045990943908691

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00035214424133301

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0030319690704346

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00052094459533691

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065708160400391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00071907043457031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00067901611328125

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0023939609527588

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.4124550819397

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.17099618911743

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00042510032653809

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00039887428283691

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.096709966659546

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0029489994049072

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.063547849655151

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.028517007827759

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.096138954162598

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.021487951278687

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0038809776306152

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064992904663086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052118301391602

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0oca0jvf9d8mndmjlssg4me2mf3bimhc'
AND `ip_address` = '::1' 
 Execution Time:0.003511905670166

SELECT GET_LOCK('f1769cf1d6b1303e658690bf73d79df2', 300) AS ci_session_lock 
 Execution Time:0.0017030239105225

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0oca0jvf9d8mndmjlssg4me2mf3bimhc'
AND `ip_address` = '::1' 
 Execution Time:0.0012810230255127

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0016000270843506

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0009300708770752

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011351108551025

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00048184394836426

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00037002563476562

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.015759944915771

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010528564453125

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0023601055145264

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011250972747803

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00098800659179688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00095796585083008

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010800361633301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00073504447937012

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0028538703918457

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.41498398780823

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.24553203582764

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00073814392089844

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00062108039855957

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.13626384735107

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.002227783203125

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.070920944213867

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.052970170974731

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.08870792388916

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.020977020263672

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0040631294250488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00061798095703125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00051999092102051

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0oca0jvf9d8mndmjlssg4me2mf3bimhc'
AND `ip_address` = '::1' 
 Execution Time:0.0012509822845459

SELECT GET_LOCK('f1769cf1d6b1303e658690bf73d79df2', 300) AS ci_session_lock 
 Execution Time:0.00039577484130859

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0oca0jvf9d8mndmjlssg4me2mf3bimhc'
AND `ip_address` = '::1' 
 Execution Time:0.00051593780517578

UPDATE `ospos_sessions` SET `timestamp` = 1657989789, `data` = '__ci_last_regenerate|i:1657989789;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = '0oca0jvf9d8mndmjlssg4me2mf3bimhc'
AND `ip_address` = '::1' 
 Execution Time:0.090884923934937

SELECT RELEASE_LOCK('f1769cf1d6b1303e658690bf73d79df2') AS ci_session_lock 
 Execution Time:0.00033807754516602

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '0oca0jvf9d8mndmjlssg4me2mf3bimhc'
AND `ip_address` = '::1' 
 Execution Time:0.00052404403686523

SELECT GET_LOCK('5da2746f6d7055effb7d37a228a4b704', 300) AS ci_session_lock 
 Execution Time:0.046121835708618

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'm7nurgp1lddkkvhu6e64fmf9v9f90ols'
AND `ip_address` = '::1' 
 Execution Time:0.00081706047058105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00085186958312988

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0010790824890137

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012209415435791

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010881423950195

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00067901611328125

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0036120414733887

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00071096420288086

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0008690357208252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068402290344238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058603286743164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00055599212646484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00054001808166504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0007321834564209

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.031435012817383

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.56056880950928

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.30843710899353

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00078082084655762

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00066804885864258

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.2158191204071

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0025701522827148

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.088375091552734

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.035460948944092

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.066030025482178

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.026693820953369

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0039200782775879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006110668182373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00051999092102051

SELECT GET_LOCK('7e61db6520d3713fb5d80245a830a8a8', 300) AS ci_session_lock 
 Execution Time:0.053550004959106

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '270gn5fg930h30o3e8d66k456b9hv11f'
AND `ip_address` = '::1' 
 Execution Time:0.0015711784362793

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0043001174926758

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0016131401062012

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0016348361968994

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.00046300888061523

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.018084049224854

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'm7nurgp1lddkkvhu6e64fmf9v9f90ols'
AND `ip_address` = '::1' 
 Execution Time:0.0031869411468506

SELECT GET_LOCK('5da2746f6d7055effb7d37a228a4b704', 300) AS ci_session_lock 
 Execution Time:0.0009458065032959

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'm7nurgp1lddkkvhu6e64fmf9v9f90ols'
AND `ip_address` = '::1' 
 Execution Time:0.0013229846954346

UPDATE `ospos_sessions` SET `timestamp` = 1657990167, `data` = '__ci_last_regenerate|i:1657990167;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'm7nurgp1lddkkvhu6e64fmf9v9f90ols'
AND `ip_address` = '::1' 
 Execution Time:0.068413019180298

SELECT RELEASE_LOCK('5da2746f6d7055effb7d37a228a4b704') AS ci_session_lock 
 Execution Time:0.00078296661376953

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'm7nurgp1lddkkvhu6e64fmf9v9f90ols'
AND `ip_address` = '::1' 
 Execution Time:0.0011417865753174

SELECT GET_LOCK('57122eaec1dae62da6a8abe03f392591', 300) AS ci_session_lock 
 Execution Time:0.00088787078857422

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'muoqkmj5elql0ljqijn9e2t9fi12u883'
AND `ip_address` = '::1' 
 Execution Time:0.16626906394958

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0023500919342041

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0012309551239014

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0024251937866211

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010042190551758

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00097393989562988

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0080749988555908

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00079202651977539

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0011799335479736

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00061488151550293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052690505981445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0004570484161377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00043582916259766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00084280967712402

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0032939910888672

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.44279217720032

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.1886899471283

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00046086311340332

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00034499168395996

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.10713791847229

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0020520687103271

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.071253061294556

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.027703046798706

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.065973997116089

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.051877021789551

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0062189102172852

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00060081481933594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00052285194396973

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'muoqkmj5elql0ljqijn9e2t9fi12u883'
AND `ip_address` = '::1' 
 Execution Time:0.0015769004821777

SELECT GET_LOCK('57122eaec1dae62da6a8abe03f392591', 300) AS ci_session_lock 
 Execution Time:0.025851964950562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'muoqkmj5elql0ljqijn9e2t9fi12u883'
AND `ip_address` = '::1' 
 Execution Time:0.00084996223449707

UPDATE `ospos_sessions` SET `timestamp` = 1657991292, `data` = '__ci_last_regenerate|i:1657991292;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'muoqkmj5elql0ljqijn9e2t9fi12u883'
AND `ip_address` = '::1' 
 Execution Time:0.12885499000549

SELECT RELEASE_LOCK('57122eaec1dae62da6a8abe03f392591') AS ci_session_lock 
 Execution Time:0.001039981842041

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'muoqkmj5elql0ljqijn9e2t9fi12u883'
AND `ip_address` = '::1' 
 Execution Time:0.0099990367889404

SELECT GET_LOCK('71b468e25f0daef59ca89ace57ba0fb7', 300) AS ci_session_lock 
 Execution Time:0.18171286582947

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'img4jgefkt6pd0ecjpinvp9gr5n5uulm'
AND `ip_address` = '::1' 
 Execution Time:0.0008540153503418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0018930435180664

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.00075197219848633

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011701583862305

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00055599212646484

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00050997734069824

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0025811195373535

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00058603286743164

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006711483001709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00062894821166992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0005488395690918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058317184448242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00071096420288086

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.043663024902344

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.32182908058167

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.13037800788879

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0010559558868408

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00052309036254883

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.37796592712402

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` IS NULL
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.048536062240601

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` IS NULL
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0018670558929443

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` IS NULL
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0025680065155029

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` IS NULL
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0033550262451172

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` IS NULL
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0015630722045898

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` IS NULL
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0011498928070068

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066399574279785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0006101131439209

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'img4jgefkt6pd0ecjpinvp9gr5n5uulm'
AND `ip_address` = '::1' 
 Execution Time:0.49185490608215

SELECT GET_LOCK('71b468e25f0daef59ca89ace57ba0fb7', 300) AS ci_session_lock 
 Execution Time:0.015506029129028

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'img4jgefkt6pd0ecjpinvp9gr5n5uulm'
AND `ip_address` = '::1' 
 Execution Time:0.0019481182098389

UPDATE `ospos_sessions` SET `timestamp` = 1657993296, `data` = '__ci_last_regenerate|i:1657993296;person_id|s:2:\"22\";menu_group|s:4:\"home\";'
WHERE `id` = 'img4jgefkt6pd0ecjpinvp9gr5n5uulm'
AND `ip_address` = '::1' 
 Execution Time:0.20712208747864

SELECT RELEASE_LOCK('71b468e25f0daef59ca89ace57ba0fb7') AS ci_session_lock 
 Execution Time:0.0010850429534912

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'img4jgefkt6pd0ecjpinvp9gr5n5uulm'
AND `ip_address` = '::1' 
 Execution Time:0.022780895233154

SELECT GET_LOCK('a789d5235fe8aff302352d002474066e', 300) AS ci_session_lock 
 Execution Time:0.16637396812439

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '85plqb89hljocucai9kmik60sc3md4j1'
AND `ip_address` = '::1' 
 Execution Time:0.019798994064331

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.09245491027832

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.023423194885254

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.048432111740112

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081992149353027

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00062298774719238

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.084230899810791

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0017461776733398

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0016942024230957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00085091590881348

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00069403648376465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064802169799805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.002312183380127

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
 Execution Time:0.1085479259491

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
 Execution Time:1.0141689777374

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
 Execution Time:5.8145709037781

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
 Execution Time:0.57471895217896

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65514' 
 Execution Time:0.00098609924316406

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65514' 
 Execution Time:0.094305992126465

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65518' 
 Execution Time:0.0010528564453125

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65518' 
 Execution Time:0.00083708763122559

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65520' 
 Execution Time:0.0010590553283691

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65520' 
 Execution Time:0.010828971862793

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65523' 
 Execution Time:0.0011849403381348

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65523' 
 Execution Time:0.0010371208190918

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65524' 
 Execution Time:0.0011107921600342

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65524' 
 Execution Time:0.0011000633239746

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65526' 
 Execution Time:0.001244068145752

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65526' 
 Execution Time:0.00094199180603027

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65529' 
 Execution Time:0.0011601448059082

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65529' 
 Execution Time:0.001060962677002

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65530' 
 Execution Time:0.0010628700256348

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65530' 
 Execution Time:0.0011141300201416

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65531' 
 Execution Time:0.0011301040649414

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65531' 
 Execution Time:0.0013999938964844

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65532' 
 Execution Time:0.0011870861053467

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65532' 
 Execution Time:0.0010991096496582

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65534' 
 Execution Time:0.001011848449707

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65534' 
 Execution Time:0.00080204010009766

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65538' 
 Execution Time:0.00080394744873047

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65538' 
 Execution Time:0.00068902969360352

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65544' 
 Execution Time:0.00075507164001465

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65544' 
 Execution Time:0.00072503089904785

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65546' 
 Execution Time:0.0010972023010254

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65546' 
 Execution Time:0.00070905685424805

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65548' 
 Execution Time:0.0014028549194336

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65548' 
 Execution Time:0.00066494941711426

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65552' 
 Execution Time:0.0012331008911133

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65552' 
 Execution Time:0.00077486038208008

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65559' 
 Execution Time:0.00078082084655762

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65559' 
 Execution Time:0.00057697296142578

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65560' 
 Execution Time:0.00070285797119141

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65560' 
 Execution Time:0.00063490867614746

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65563' 
 Execution Time:0.00071620941162109

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65563' 
 Execution Time:0.00064706802368164

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65566' 
 Execution Time:0.00064206123352051

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65566' 
 Execution Time:0.00038504600524902

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65567' 
 Execution Time:0.00038003921508789

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65567' 
 Execution Time:0.00032305717468262

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65556' 
 Execution Time:0.00040793418884277

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65556' 
 Execution Time:0.00034308433532715

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65568' 
 Execution Time:0.00038504600524902

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65568' 
 Execution Time:0.00034093856811523

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65574' 
 Execution Time:0.00041794776916504

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65574' 
 Execution Time:0.00043392181396484

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65575' 
 Execution Time:0.0010480880737305

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65575' 
 Execution Time:0.001133918762207

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65585' 
 Execution Time:0.00062108039855957

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65585' 
 Execution Time:0.00036311149597168

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65587' 
 Execution Time:0.00035905838012695

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65587' 
 Execution Time:0.00030112266540527

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65586' 
 Execution Time:0.00037813186645508

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65586' 
 Execution Time:0.00037479400634766

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65589' 
 Execution Time:0.00042295455932617

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65589' 
 Execution Time:0.00037193298339844

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65593' 
 Execution Time:0.00038385391235352

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65593' 
 Execution Time:0.00037002563476562

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65592' 
 Execution Time:0.00038719177246094

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65592' 
 Execution Time:0.0003669261932373

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65595' 
 Execution Time:0.0003819465637207

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65595' 
 Execution Time:0.00037693977355957

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65596' 
 Execution Time:0.00038409233093262

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65596' 
 Execution Time:0.00038599967956543

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65597' 
 Execution Time:0.0003960132598877

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65597' 
 Execution Time:0.00033879280090332

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65598' 
 Execution Time:0.00037193298339844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65598' 
 Execution Time:0.0003349781036377

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65600' 
 Execution Time:0.00038409233093262

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65600' 
 Execution Time:0.0003359317779541

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65615' 
 Execution Time:0.00037598609924316

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65615' 
 Execution Time:0.00033402442932129

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65617' 
 Execution Time:0.00051212310791016

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65617' 
 Execution Time:0.00047707557678223

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65618' 
 Execution Time:0.00044798851013184

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65618' 
 Execution Time:0.00054812431335449

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65624' 
 Execution Time:0.00095295906066895

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65624' 
 Execution Time:0.0006401538848877

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65627' 
 Execution Time:0.00046801567077637

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65627' 
 Execution Time:0.00039005279541016

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65628' 
 Execution Time:0.00039315223693848

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65628' 
 Execution Time:0.00036406517028809

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65631' 
 Execution Time:0.00040411949157715

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65631' 
 Execution Time:0.00035285949707031

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65633' 
 Execution Time:0.00040292739868164

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65633' 
 Execution Time:0.00035595893859863

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65634' 
 Execution Time:0.0003960132598877

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65634' 
 Execution Time:0.00034499168395996

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65636' 
 Execution Time:0.0003819465637207

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65636' 
 Execution Time:0.0003509521484375

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65638' 
 Execution Time:0.00039005279541016

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65638' 
 Execution Time:0.00037407875061035

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65639' 
 Execution Time:0.00038504600524902

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65639' 
 Execution Time:0.00035500526428223

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65640' 
 Execution Time:0.00038599967956543

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65640' 
 Execution Time:0.0003349781036377

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65649' 
 Execution Time:0.00039410591125488

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65649' 
 Execution Time:0.00034189224243164

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65652' 
 Execution Time:0.00037717819213867

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65652' 
 Execution Time:0.00033712387084961

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65656' 
 Execution Time:0.00058698654174805

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65656' 
 Execution Time:0.00048494338989258

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65657' 
 Execution Time:0.00040388107299805

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65657' 
 Execution Time:0.00033402442932129

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65659' 
 Execution Time:0.00050210952758789

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65659' 
 Execution Time:0.00054597854614258

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65663' 
 Execution Time:0.00066089630126953

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65663' 
 Execution Time:0.00057101249694824

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65666' 
 Execution Time:0.00050497055053711

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65666' 
 Execution Time:0.00036787986755371

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65670' 
 Execution Time:0.00044989585876465

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65670' 
 Execution Time:0.00035595893859863

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65677' 
 Execution Time:0.00039410591125488

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65677' 
 Execution Time:0.00034999847412109

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65678' 
 Execution Time:0.00038909912109375

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65678' 
 Execution Time:0.00034284591674805

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65679' 
 Execution Time:0.00037884712219238

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65679' 
 Execution Time:0.00033998489379883

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65681' 
 Execution Time:0.00040102005004883

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65681' 
 Execution Time:0.00033903121948242

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65685' 
 Execution Time:0.0003809928894043

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65685' 
 Execution Time:0.0003359317779541

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65688' 
 Execution Time:0.0003809928894043

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65688' 
 Execution Time:0.00033402442932129

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65697' 
 Execution Time:0.00078296661376953

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65697' 
 Execution Time:0.044553995132446

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65702' 
 Execution Time:0.0018219947814941

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65702' 
 Execution Time:0.0007469654083252

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65704' 
 Execution Time:0.00085902214050293

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65704' 
 Execution Time:0.00078892707824707

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65705' 
 Execution Time:0.00087308883666992

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65705' 
 Execution Time:0.00078392028808594

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65706' 
 Execution Time:0.00092577934265137

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65706' 
 Execution Time:0.0008540153503418

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65708' 
 Execution Time:0.00092697143554688

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65708' 
 Execution Time:0.00085091590881348

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65709' 
 Execution Time:0.00096893310546875

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65709' 
 Execution Time:0.0006561279296875

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65623' 
 Execution Time:0.00061607360839844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65623' 
 Execution Time:0.00047802925109863

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65717' 
 Execution Time:0.00059103965759277

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65717' 
 Execution Time:0.00045585632324219

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65718' 
 Execution Time:0.00049996376037598

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65718' 
 Execution Time:0.00043320655822754

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65719' 
 Execution Time:0.00047612190246582

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65719' 
 Execution Time:0.00043082237243652

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65727' 
 Execution Time:0.00047993659973145

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65727' 
 Execution Time:0.00042510032653809

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65728' 
 Execution Time:0.00049400329589844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65728' 
 Execution Time:0.00044107437133789

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65730' 
 Execution Time:0.00050806999206543

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65730' 
 Execution Time:0.0004420280456543

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65731' 
 Execution Time:0.00092291831970215

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65731' 
 Execution Time:0.00091695785522461

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65732' 
 Execution Time:0.0014619827270508

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65732' 
 Execution Time:0.0014841556549072

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65733' 
 Execution Time:0.0016942024230957

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65733' 
 Execution Time:0.0013289451599121

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65736' 
 Execution Time:0.0033290386199951

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65736' 
 Execution Time:0.0007941722869873

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65737' 
 Execution Time:0.00093793869018555

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65737' 
 Execution Time:0.0010569095611572

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65738' 
 Execution Time:0.0009009838104248

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65738' 
 Execution Time:0.000823974609375

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65742' 
 Execution Time:0.0011401176452637

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65742' 
 Execution Time:0.00078892707824707

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65743' 
 Execution Time:0.0010340213775635

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65743' 
 Execution Time:0.00094008445739746

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65744' 
 Execution Time:0.001478910446167

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65744' 
 Execution Time:0.0012109279632568

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65745' 
 Execution Time:0.0037128925323486

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65745' 
 Execution Time:0.00087499618530273

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65748' 
 Execution Time:0.0010659694671631

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65748' 
 Execution Time:0.001168966293335

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65749' 
 Execution Time:0.0012779235839844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65749' 
 Execution Time:0.00094199180603027

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65750' 
 Execution Time:0.0027010440826416

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65750' 
 Execution Time:0.0023488998413086

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65752' 
 Execution Time:0.00095486640930176

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65752' 
 Execution Time:0.00086212158203125

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65757' 
 Execution Time:0.0010459423065186

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65757' 
 Execution Time:0.0007779598236084

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65759' 
 Execution Time:0.00089097023010254

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65759' 
 Execution Time:0.00079703330993652

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65764' 
 Execution Time:0.00092601776123047

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65764' 
 Execution Time:0.00074982643127441

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65767' 
 Execution Time:0.00085687637329102

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65767' 
 Execution Time:0.001176118850708

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65769' 
 Execution Time:0.00095486640930176

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65769' 
 Execution Time:0.0028269290924072

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65774' 
 Execution Time:0.0011568069458008

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65774' 
 Execution Time:0.00078392028808594

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65775' 
 Execution Time:0.0008699893951416

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65775' 
 Execution Time:0.0010340213775635

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65778' 
 Execution Time:0.00091719627380371

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65778' 
 Execution Time:0.00070095062255859

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65781' 
 Execution Time:0.00087189674377441

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65781' 
 Execution Time:0.0007469654083252

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65785' 
 Execution Time:0.0010309219360352

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65785' 
 Execution Time:0.0013291835784912

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65786' 
 Execution Time:0.0021839141845703

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65786' 
 Execution Time:0.00081801414489746

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65791' 
 Execution Time:0.00098586082458496

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65791' 
 Execution Time:0.00097799301147461

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65794' 
 Execution Time:0.0013320446014404

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65794' 
 Execution Time:0.0012509822845459

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65806' 
 Execution Time:0.0012030601501465

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65806' 
 Execution Time:0.00098085403442383

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65805' 
 Execution Time:0.0064890384674072

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65805' 
 Execution Time:0.00095987319946289

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65810' 
 Execution Time:0.0011060237884521

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65810' 
 Execution Time:0.00089192390441895

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65817' 
 Execution Time:0.00097298622131348

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65817' 
 Execution Time:0.00075984001159668

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65819' 
 Execution Time:0.00087904930114746

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65819' 
 Execution Time:0.00070500373840332

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65821' 
 Execution Time:0.0015830993652344

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65821' 
 Execution Time:0.00078487396240234

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65826' 
 Execution Time:0.0008690357208252

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65826' 
 Execution Time:0.0035178661346436

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65824' 
 Execution Time:0.0012800693511963

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65824' 
 Execution Time:0.0007328987121582

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65831' 
 Execution Time:0.00080704689025879

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65831' 
 Execution Time:0.00078105926513672

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65833' 
 Execution Time:0.0023078918457031

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65833' 
 Execution Time:0.0022728443145752

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65834' 
 Execution Time:0.0039448738098145

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65834' 
 Execution Time:0.0014631748199463

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65837' 
 Execution Time:0.0010559558868408

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65837' 
 Execution Time:0.00083589553833008

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65840' 
 Execution Time:0.0011370182037354

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65840' 
 Execution Time:0.00077319145202637

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65842' 
 Execution Time:0.0010099411010742

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65842' 
 Execution Time:0.00079512596130371

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65844' 
 Execution Time:0.0010039806365967

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65844' 
 Execution Time:0.0010170936584473

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65853' 
 Execution Time:0.0022330284118652

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65853' 
 Execution Time:0.00089788436889648

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65849' 
 Execution Time:0.0014569759368896

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65849' 
 Execution Time:0.00081682205200195

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65856' 
 Execution Time:0.0011131763458252

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65856' 
 Execution Time:0.00086593627929688

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65857' 
 Execution Time:0.0011961460113525

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65857' 
 Execution Time:0.00089788436889648

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65858' 
 Execution Time:0.0010080337524414

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65858' 
 Execution Time:0.00088286399841309

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65860' 
 Execution Time:0.0081870555877686

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65860' 
 Execution Time:0.0019099712371826

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65861' 
 Execution Time:0.0010321140289307

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65861' 
 Execution Time:0.00082492828369141

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65862' 
 Execution Time:0.0010190010070801

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65862' 
 Execution Time:0.00079989433288574

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65863' 
 Execution Time:0.0011839866638184

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65863' 
 Execution Time:0.00076007843017578

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65864' 
 Execution Time:0.0011250972747803

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65864' 
 Execution Time:0.0012149810791016

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65865' 
 Execution Time:0.00092101097106934

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65865' 
 Execution Time:0.00078296661376953

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65866' 
 Execution Time:0.00091409683227539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65866' 
 Execution Time:0.00076913833618164

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65867' 
 Execution Time:0.0010428428649902

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65867' 
 Execution Time:0.00087404251098633

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65868' 
 Execution Time:0.00086593627929688

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65868' 
 Execution Time:0.00074100494384766

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65869' 
 Execution Time:0.00092482566833496

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65869' 
 Execution Time:0.00076794624328613

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65870' 
 Execution Time:0.0009768009185791

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65870' 
 Execution Time:0.0009160041809082

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65871' 
 Execution Time:0.001755952835083

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65871' 
 Execution Time:0.00076389312744141

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65872' 
 Execution Time:0.0011920928955078

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65872' 
 Execution Time:0.00087499618530273

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65873' 
 Execution Time:0.00094699859619141

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65873' 
 Execution Time:0.00097489356994629

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65874' 
 Execution Time:0.0010781288146973

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65874' 
 Execution Time:0.00079894065856934

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65875' 
 Execution Time:0.00096702575683594

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65875' 
 Execution Time:0.000762939453125

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65877' 
 Execution Time:0.00081896781921387

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65877' 
 Execution Time:0.00076889991760254

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65876' 
 Execution Time:0.00091409683227539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65876' 
 Execution Time:0.00074291229248047

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65878' 
 Execution Time:0.00070977210998535

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65878' 
 Execution Time:0.00063896179199219

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65880' 
 Execution Time:0.00073504447937012

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65880' 
 Execution Time:0.00073814392089844

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65879' 
 Execution Time:0.00092506408691406

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65879' 
 Execution Time:0.00078415870666504

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65881' 
 Execution Time:0.00084781646728516

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65881' 
 Execution Time:0.00075197219848633

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65882' 
 Execution Time:0.00085616111755371

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65882' 
 Execution Time:0.00080490112304688

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65859' 
 Execution Time:0.00090694427490234

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65859' 
 Execution Time:0.00076508522033691

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65884' 
 Execution Time:0.00090408325195312

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65884' 
 Execution Time:0.00072693824768066

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65885' 
 Execution Time:0.00085306167602539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65885' 
 Execution Time:0.00068092346191406

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65886' 
 Execution Time:0.00097513198852539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65886' 
 Execution Time:0.0008389949798584

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65887' 
 Execution Time:0.00094795227050781

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65887' 
 Execution Time:0.0008399486541748

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65888' 
 Execution Time:0.001115083694458

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65888' 
 Execution Time:0.00075697898864746

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65889' 
 Execution Time:0.0010018348693848

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65889' 
 Execution Time:0.00071096420288086

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65883' 
 Execution Time:0.00089001655578613

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65883' 
 Execution Time:0.00071001052856445

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65890' 
 Execution Time:0.00093698501586914

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65890' 
 Execution Time:0.00069689750671387

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65891' 
 Execution Time:0.0010781288146973

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65891' 
 Execution Time:0.00096416473388672

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65892' 
 Execution Time:0.00089502334594727

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65892' 
 Execution Time:0.00073099136352539

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65893' 
 Execution Time:0.00091409683227539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65893' 
 Execution Time:0.00068783760070801

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65894' 
 Execution Time:0.00078701972961426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65894' 
 Execution Time:0.00086498260498047

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65896' 
 Execution Time:0.00094509124755859

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65896' 
 Execution Time:0.00071096420288086

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65897' 
 Execution Time:0.00086522102355957

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65897' 
 Execution Time:0.00066804885864258

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65898' 
 Execution Time:0.00078701972961426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65898' 
 Execution Time:0.00071501731872559

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65899' 
 Execution Time:0.00077199935913086

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65899' 
 Execution Time:0.0010058879852295

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65900' 
 Execution Time:0.00080609321594238

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65900' 
 Execution Time:0.00067520141601562

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65901' 
 Execution Time:0.00074195861816406

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65901' 
 Execution Time:0.00059199333190918

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65902' 
 Execution Time:0.00065112113952637

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65902' 
 Execution Time:0.00056099891662598

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65903' 
 Execution Time:0.00067710876464844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65903' 
 Execution Time:0.00061392784118652

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65895' 
 Execution Time:0.0010640621185303

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65895' 
 Execution Time:0.0006260871887207

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65904' 
 Execution Time:0.00069189071655273

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65904' 
 Execution Time:0.00058197975158691

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65906' 
 Execution Time:0.00066494941711426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65906' 
 Execution Time:0.00061988830566406

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65907' 
 Execution Time:0.00072693824768066

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65907' 
 Execution Time:0.00072884559631348

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65905' 
 Execution Time:0.00084686279296875

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65905' 
 Execution Time:0.00065207481384277

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65908' 
 Execution Time:0.00079202651977539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65908' 
 Execution Time:0.00068998336791992

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65909' 
 Execution Time:0.00078582763671875

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65909' 
 Execution Time:0.00072598457336426

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65910' 
 Execution Time:0.00099396705627441

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65910' 
 Execution Time:0.0007469654083252

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65911' 
 Execution Time:0.00090217590332031

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65911' 
 Execution Time:0.00072884559631348

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65912' 
 Execution Time:0.00084805488586426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65912' 
 Execution Time:0.00078606605529785

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65917' 
 Execution Time:0.0011680126190186

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65917' 
 Execution Time:0.00080513954162598

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65919' 
 Execution Time:0.00092911720275879

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65919' 
 Execution Time:0.00073003768920898

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65921' 
 Execution Time:0.00088810920715332

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65921' 
 Execution Time:0.00075793266296387

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65923' 
 Execution Time:0.00082993507385254

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65923' 
 Execution Time:0.00069618225097656

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65925' 
 Execution Time:0.00081801414489746

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65925' 
 Execution Time:0.00073003768920898

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65928' 
 Execution Time:0.00084185600280762

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65928' 
 Execution Time:0.00072789192199707

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65936' 
 Execution Time:0.00092101097106934

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65936' 
 Execution Time:0.00083804130554199

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65940' 
 Execution Time:0.00092506408691406

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65940' 
 Execution Time:0.06218695640564

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65939' 
 Execution Time:0.0012941360473633

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65939' 
 Execution Time:0.00094103813171387

SELECT `name`, `category`, `item_number`, `description`, `quantity_purchased`, `subtotal`, `tax`, `total`, `cost`, `profit`, `discount`, `discount_type`
FROM `ospos_sales_items_temp`
WHERE `sale_id` = '65944' 
 Execution Time:0.001945972442627

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65944' 
 Execution Time:0.00098705291748047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '493' 
 Execution Time:0.00073480606079102

SELECT `payment_type`, IFNULL(SUM(payment_amount - cash_refund), 0) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.19803905487061

SELECT SUM(subtotal) AS subtotal, SUM(tax) AS tax, SUM(total) AS total, SUM(cost) AS cost, SUM(profit) AS profit
FROM `ospos_sales_items_temp`
WHERE `employee_id` = '493'
AND `sale_status` = 0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ) 
 Execution Time:0.0095350742340088

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0007169246673584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058913230895996

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'img4jgefkt6pd0ecjpinvp9gr5n5uulm'
AND `ip_address` = '::1' 
 Execution Time:0.38068985939026

SELECT GET_LOCK('71b468e25f0daef59ca89ace57ba0fb7', 300) AS ci_session_lock 
 Execution Time:0.041568040847778

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'img4jgefkt6pd0ecjpinvp9gr5n5uulm'
AND `ip_address` = '::1' 
 Execution Time:0.0014309883117676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.26319813728333

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.037460088729858

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.10677909851074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00072407722473145

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00052404403686523

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.29666090011597

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0012722015380859

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0020790100097656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010299682617188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00087308883666992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081992149353027

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081706047058105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00092792510986328

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.086927890777588

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:1.2956781387329

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.5231831073761

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00043582916259766

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00039386749267578

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.13610887527466

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0018320083618164

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.31856417655945

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.045076131820679

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.12672901153564

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.14871287345886

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.010382175445557

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00058794021606445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00055599212646484

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40ij0qofj7amis5teb87c093ti4v9f0m'
AND `ip_address` = '::1' 
 Execution Time:0.050812005996704

SELECT GET_LOCK('2d97300d8f80007f3c819070997013d2', 300) AS ci_session_lock 
 Execution Time:0.046982049942017

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40ij0qofj7amis5teb87c093ti4v9f0m'
AND `ip_address` = '::1' 
 Execution Time:0.00095295906066895

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.04482102394104

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.027143001556396

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001924991607666

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075721740722656

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00063109397888184

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.032034873962402

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00059103965759277

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.039866924285889

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00070095062255859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059199333190918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0005640983581543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00057601928710938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074315071105957

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.046371936798096

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.3867712020874

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.14323282241821

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00041007995605469

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00035500526428223

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.092992067337036

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
AND EXISTS(SELECT *
FROM `ospos_sales_items` AS `sales_items`
WHERE `sales_items`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND `item_location` = 1)
GROUP BY `payment_type` 
 Execution Time:0.27146506309509

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
AND EXISTS(SELECT *
FROM `ospos_sales_items` AS `sales_items`
WHERE `sales_items`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND `item_location` = 1)
GROUP BY `payment_type` 
 Execution Time:0.12856888771057

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
AND EXISTS(SELECT *
FROM `ospos_sales_items` AS `sales_items`
WHERE `sales_items`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND `item_location` = 1)
GROUP BY `payment_type` 
 Execution Time:0.038198947906494

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
AND EXISTS(SELECT *
FROM `ospos_sales_items` AS `sales_items`
WHERE `sales_items`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND `item_location` = 1)
GROUP BY `payment_type` 
 Execution Time:0.073369979858398

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
AND EXISTS(SELECT *
FROM `ospos_sales_items` AS `sales_items`
WHERE `sales_items`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND `item_location` = 1)
GROUP BY `payment_type` 
 Execution Time:0.02026104927063

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
AND EXISTS(SELECT *
FROM `ospos_sales_items` AS `sales_items`
WHERE `sales_items`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND `item_location` = 1)
GROUP BY `payment_type` 
 Execution Time:0.0053541660308838

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00062108039855957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00048112869262695

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '40ij0qofj7amis5teb87c093ti4v9f0m'
AND `ip_address` = '::1' 
 Execution Time:0.0012691020965576

SELECT GET_LOCK('2d97300d8f80007f3c819070997013d2', 300) AS ci_session_lock 
 Execution Time:0.00053501129150391

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '40ij0qofj7amis5teb87c093ti4v9f0m'
AND `ip_address` = '::1' 
 Execution Time:0.0012688636779785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010550022125244

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.016203165054321

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.016942024230957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00051689147949219

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00067996978759766

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.097844123840332

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010449886322021

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0015108585357666

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00097918510437012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00080204010009766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074887275695801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075006484985352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0007328987121582

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.029477834701538

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.65901207923889

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.66382598876953

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00075197219848633

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
				WHERE DATE(sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00062799453735352

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.14847707748413

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0018100738525391

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.074461936950684

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '41'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.033627986907959

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '34'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.077821016311646

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '32'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.02238392829895

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '1'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-01' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0053341388702393

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.11307811737061

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00095200538635254

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.090244054794312

SELECT GET_LOCK('5fd9e2406400df7104c566ed7282269d', 300) AS ci_session_lock 
 Execution Time:0.00036215782165527

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.00099611282348633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.012704133987427

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0011861324310303

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0012450218200684

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.42302894592285

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010490417480469

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.001251220703125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0012581348419189

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0013251304626465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.001295804977417

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011122226715088

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00064587593078613

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.080585956573486

SELECT GET_LOCK('5fd9e2406400df7104c566ed7282269d', 300) AS ci_session_lock 
 Execution Time:0.00045919418334961

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.00082492828369141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0012869834899902

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.010097026824951

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.037047147750854

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.046629905700684

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0007929801940918

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00098896026611328

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00083613395690918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00084590911865234

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00086593627929688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081396102905273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00088405609130859

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.0016820430755615

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00067687034606934

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00057601928710938

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00060892105102539

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00057220458984375

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00056099891662598

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.017215967178345

SELECT GET_LOCK('5fd9e2406400df7104c566ed7282269d', 300) AS ci_session_lock 
 Execution Time:0.00045514106750488

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.00066900253295898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.02312707901001

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0015969276428223

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0018949508666992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00080204010009766

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00067591667175293

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0037930011749268

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00074291229248047

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00094699859619141

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00086808204650879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00082111358642578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075197219848633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066494941711426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.000762939453125

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.094665050506592

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.04566502571106

SELECT GET_LOCK('5fd9e2406400df7104c566ed7282269d', 300) AS ci_session_lock 
 Execution Time:0.00047993659973145

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.0005948543548584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.03133487701416

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0011420249938965

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0085599422454834

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00071907043457031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.068889141082764

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.05784797668457

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00061511993408203

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.001021146774292

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00072121620178223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.000823974609375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0021710395812988

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00089311599731445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010149478912354

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0033459663391113

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.48485112190247

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.070015907287598

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0015900135040283

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.0012040138244629

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.10468816757202

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00057816505432129

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.022920846939087

SELECT GET_LOCK('5fd9e2406400df7104c566ed7282269d', 300) AS ci_session_lock 
 Execution Time:0.00048518180847168

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.00071620941162109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.020030975341797

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0012660026550293

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011961460113525

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.12498497962952

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0076260566711426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.000701904296875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00063490867614746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068187713623047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00066494941711426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00065803527832031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.0012331008911133

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00064611434936523

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00056886672973633

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.0005338191986084

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.00055480003356934

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00049805641174316

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00053000450134277

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.17324495315552

SELECT GET_LOCK('5fd9e2406400df7104c566ed7282269d', 300) AS ci_session_lock 
 Execution Time:0.00042605400085449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0012240409851074

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0011789798736572

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.001662015914917

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068998336791992

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.001032829284668

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0047039985656738

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00071001052856445

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010919570922852

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00088691711425781

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00084996223449707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081300735473633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081586837768555

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00095295906066895

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0011858940124512

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.021451950073242

SELECT GET_LOCK('5fd9e2406400df7104c566ed7282269d', 300) AS ci_session_lock 
 Execution Time:0.00057411193847656

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.00091290473937988

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.013442039489746

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0018661022186279

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0030648708343506

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0010600090026855

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00094389915466309

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.055933952331543

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00092101097106934

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0012760162353516

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0013120174407959

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0012679100036621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00081491470336914

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068807601928711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0012381076812744

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.079573154449463

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.60807394981384

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.28954410552979

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00082588195800781

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
				WHERE DATE(sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00076794624328613

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.11229991912842

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '493'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.0018129348754883

SELECT `payment_type`, SUM(payment_amount - cash_refund) AS type_total
FROM `ospos_sales_payments`
WHERE `employee_id` = '40'
AND EXISTS(SELECT *
FROM `ospos_sales` AS `sales`
WHERE `sales`.`sale_id` = `ospos_sales_payments`.`sale_id`
AND DATE(sales.sale_time) BETWEEN '2022-07-10' AND '2022-07-16'
AND `sale_status` =0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ))
GROUP BY `payment_type` 
 Execution Time:0.059524059295654

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059413909912109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00045514106750488

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.07043194770813

SELECT GET_LOCK('5fd9e2406400df7104c566ed7282269d', 300) AS ci_session_lock 
 Execution Time:0.00095701217651367

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.0013768672943115

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.12600994110107

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0023560523986816

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.025949001312256

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.03333592414856

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0013160705566406

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0016460418701172

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.001708984375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0019938945770264

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0019268989562988

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0015308856964111

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00061202049255371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22' 
 Execution Time:0.002324104309082

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00099802017211914

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.0011179447174072

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.0012421607971191

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0010230541229248

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00069117546081543

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0015461444854736

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00092506408691406

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.018525838851929

SELECT GET_LOCK('5fd9e2406400df7104c566ed7282269d', 300) AS ci_session_lock 
 Execution Time:0.00083112716674805

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.0011289119720459

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0018069744110107

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0048611164093018

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.002112865447998

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00075912475585938

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.014975786209106

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.018818140029907

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00087904930114746

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.025000810623169

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00086498260498047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00080013275146484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00071907043457031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0015130043029785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00099897384643555

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '22'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.039580821990967

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.023744821548462

SELECT GET_LOCK('5fd9e2406400df7104c566ed7282269d', 300) AS ci_session_lock 
 Execution Time:0.00039315223693848

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rvfhrorjltfq1uq4rvbfi6ocghgd1034'
AND `ip_address` = '::1' 
 Execution Time:0.00057101249694824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.046556949615479

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '22' 
 Execution Time:0.0019979476928711

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '22'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0025210380554199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00074291229248047

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '22'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.00056314468383789

SHOW TABLES FROM `islecqxj_ospos5` 
 Execution Time:0.0040462017059326

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00084090232849121

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00096392631530762

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0011870861053467

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00072193145751953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059008598327637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00059986114501953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.00068116188049316

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.025051116943359

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.34543895721436

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, MAX(CONCAT(employee_p.first_name, " ", employee_p.last_name)) AS employee, SUM(sales_items.quantity_purchased) AS quantity_purchased, COUNT(DISTINCT sales.sale_id) AS sales, `sales`.`employee_id` AS `employee_id`
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
JOIN `ospos_people` AS `employee_p` ON `sales`.`employee_id` = `employee_p`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 )
GROUP BY `sales`.`employee_id`
ORDER BY `employee_p`.`last_name` 
 Execution Time:0.059689044952393

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00036001205444336

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
				WHERE DATE(sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
				GROUP BY sale_id
			) 
 Execution Time:0.00026488304138184

SELECT IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(payments.sale_cash_adjustment), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
WHERE DATE(sales.sale_time) BETWEEN '2022-07-16' AND '2022-07-16'
AND `sales`.`sale_status` = 0
AND   (
`sales`.`sale_type` = 0
OR `sales`.`sale_type` = 1
OR `sales`.`sale_type` = 4
 ) 
 Execution Time:0.066896915435791

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0019829273223877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '22' 
 Execution Time:0.0020120143890381


--Se modifican las tablas a plural y se agrega columna created_at and updated_at

--components
RENAME TABLE r85motos_ridergarage.component TO r85motos_ridergarage.components;

ALTER TABLE r85motos_ridergarage.components ADD created_at datetime NULL;
ALTER TABLE r85motos_ridergarage.components ADD updated_at DATETIME NULL;

--component_models
RENAME TABLE r85motos_ridergarage.component_model TO r85motos_ridergarage.component_models;

ALTER TABLE r85motos_ridergarage.component_models ADD created_at datetime NULL;
ALTER TABLE r85motos_ridergarage.component_models ADD updated_at DATETIME NULL;

--component_model_features
RENAME TABLE r85motos_ridergarage.component_model_feature TO r85motos_ridergarage.component_model_features;

ALTER TABLE r85motos_ridergarage.component_model_features ADD created_at datetime NULL;
ALTER TABLE r85motos_ridergarage.component_model_features ADD updated_at DATETIME NULL;

--component_model_maintences
RENAME TABLE r85motos_ridergarage.component_model_maintence TO r85motos_ridergarage.component_model_maintences;

ALTER TABLE r85motos_ridergarage.component_model_maintences ADD created_at datetime NULL;
ALTER TABLE r85motos_ridergarage.component_model_maintences ADD updated_at DATETIME NULL;

--component_model_products
RENAME TABLE r85motos_ridergarage.component_model_product TO r85motos_ridergarage.component_model_products;

ALTER TABLE r85motos_ridergarage.component_model_products ADD created_at datetime NULL;
ALTER TABLE r85motos_ridergarage.component_model_products ADD updated_at DATETIME NULL;

--line
RENAME TABLE r85motos_ridergarage.line TO r85motos_ridergarage.lines;

ALTER TABLE r85motos_ridergarage.lines ADD created_at datetime NULL;
ALTER TABLE r85motos_ridergarage.lines ADD updated_at DATETIME NULL;

--maintence
RENAME TABLE r85motos_ridergarage.maintence TO r85motos_ridergarage.maintences;

ALTER TABLE r85motos_ridergarage.maintences ADD created_at datetime NULL;
ALTER TABLE r85motos_ridergarage.maintences ADD updated_at DATETIME NULL;

--maintence_model
RENAME TABLE r85motos_ridergarage.maintence_model TO r85motos_ridergarage.maintence_models;

ALTER TABLE r85motos_ridergarage.maintence_models ADD created_at datetime NULL;
ALTER TABLE r85motos_ridergarage.maintence_models ADD updated_at DATETIME NULL;

--model
RENAME TABLE r85motos_ridergarage.model TO r85motos_ridergarage.models;

ALTER TABLE r85motos_ridergarage.models ADD created_at datetime NULL;
ALTER TABLE r85motos_ridergarage.models ADD updated_at DATETIME NULL;

--system
RENAME TABLE r85motos_ridergarage.system TO r85motos_ridergarage.systems;

ALTER TABLE r85motos_ridergarage.systems ADD created_at datetime NULL;
ALTER TABLE r85motos_ridergarage.systems ADD updated_at DATETIME NULL;
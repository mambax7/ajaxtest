#
# Structure table for `ajaxtest_employee` (7 fields)
#

CREATE TABLE `ajaxtest_employee` (
    `id`          INT(11)      NOT NULL AUTO_INCREMENT,
    `name`        VARCHAR(50)  NOT NULL,
    `address`     TEXT         NOT NULL,
    `gender`      VARCHAR(10)  NOT NULL,
    `designation` VARCHAR(100) NOT NULL,
    `age`         INT(11)      NOT NULL,
    `image`       VARCHAR(100) DEFAULT NULL,
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM;

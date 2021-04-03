#!/bin/sh

psql $dbname $username << EOF
CREATE USER tp2bdii WITH PASSWORD 'tp2bdii';

\c tp2bdii

GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO tp2bdii;
GRANT ALL PRIVILEGES ON ALL SEQUENCES IN SCHEMA public TO tp2bdii;

EOF
exit 0

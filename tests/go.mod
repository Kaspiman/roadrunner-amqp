module tests

go 1.22.0

require (
	github.com/Shopify/toxiproxy/v2 v2.8.0
	github.com/goccy/go-json v0.10.2
	github.com/google/uuid v1.6.0
	github.com/rabbitmq/amqp091-go v1.9.0
	github.com/roadrunner-server/amqp/v4 v4.9.14
	github.com/roadrunner-server/api/v4 v4.11.1
	github.com/roadrunner-server/config/v4 v4.6.9
	github.com/roadrunner-server/endure/v2 v2.4.3
	github.com/roadrunner-server/goridge/v3 v3.8.1
	github.com/roadrunner-server/informer/v4 v4.3.16
	github.com/roadrunner-server/jobs/v4 v4.7.15
	github.com/roadrunner-server/logger/v4 v4.2.16
	github.com/roadrunner-server/metrics/v4 v4.1.18
	github.com/roadrunner-server/otel/v4 v4.3.15
	github.com/roadrunner-server/resetter/v4 v4.1.2
	github.com/roadrunner-server/rpc/v4 v4.2.17
	github.com/roadrunner-server/server/v4 v4.5.9
	github.com/stretchr/testify v1.9.0
	go.uber.org/zap v1.27.0
)

replace github.com/roadrunner-server/amqp/v4 => ../

require (
	github.com/beorn7/perks v1.0.1 // indirect
	github.com/cenkalti/backoff/v4 v4.2.1 // indirect
	github.com/cespare/xxhash/v2 v2.2.0 // indirect
	github.com/davecgh/go-spew v1.1.2-0.20180830191138-d8f796af33cc // indirect
	github.com/facebookgo/clock v0.0.0-20150410010913-600d898af40a // indirect
	github.com/fatih/color v1.16.0 // indirect
	github.com/felixge/httpsnoop v1.0.4 // indirect
	github.com/fsnotify/fsnotify v1.7.0 // indirect
	github.com/go-logr/logr v1.4.1 // indirect
	github.com/go-logr/stdr v1.2.2 // indirect
	github.com/go-ole/go-ole v1.3.0 // indirect
	github.com/gogo/protobuf v1.3.2 // indirect
	github.com/golang/mock v1.7.0-rc.1 // indirect
	github.com/golang/protobuf v1.5.3 // indirect
	github.com/grpc-ecosystem/go-grpc-middleware v1.4.0 // indirect
	github.com/grpc-ecosystem/grpc-gateway/v2 v2.19.1 // indirect
	github.com/hashicorp/hcl v1.0.0 // indirect
	github.com/joho/godotenv v1.5.1 // indirect
	github.com/magiconair/properties v1.8.7 // indirect
	github.com/mattn/go-colorable v0.1.13 // indirect
	github.com/mattn/go-isatty v0.0.20 // indirect
	github.com/mitchellh/mapstructure v1.5.0 // indirect
	github.com/openzipkin/zipkin-go v0.4.2 // indirect
	github.com/pborman/uuid v1.2.1 // indirect
	github.com/pelletier/go-toml/v2 v2.1.1 // indirect
	github.com/pmezard/go-difflib v1.0.1-0.20181226105442-5d4384ee4fb2 // indirect
	github.com/prometheus/client_golang v1.19.0 // indirect
	github.com/prometheus/client_model v0.6.0 // indirect
	github.com/prometheus/common v0.49.0 // indirect
	github.com/prometheus/procfs v0.12.0 // indirect
	github.com/roadrunner-server/errors v1.4.0 // indirect
	github.com/roadrunner-server/sdk/v4 v4.6.0 // indirect
	github.com/roadrunner-server/tcplisten v1.4.0 // indirect
	github.com/robfig/cron v1.2.0 // indirect
	github.com/sagikazarmark/locafero v0.4.0 // indirect
	github.com/sagikazarmark/slog-shim v0.1.0 // indirect
	github.com/shirou/gopsutil v3.21.11+incompatible // indirect
	github.com/sourcegraph/conc v0.3.0 // indirect
	github.com/spf13/afero v1.11.0 // indirect
	github.com/spf13/cast v1.6.0 // indirect
	github.com/spf13/pflag v1.0.5 // indirect
	github.com/spf13/viper v1.18.2 // indirect
	github.com/stretchr/objx v0.5.2 // indirect
	github.com/subosito/gotenv v1.6.0 // indirect
	github.com/tklauser/go-sysconf v0.3.13 // indirect
	github.com/tklauser/numcpus v0.7.0 // indirect
	github.com/vmihailenco/msgpack/v5 v5.4.1 // indirect
	github.com/vmihailenco/tagparser/v2 v2.0.0 // indirect
	github.com/yusufpapurcu/wmi v1.2.4 // indirect
	go.opentelemetry.io/contrib/instrumentation/net/http/otelhttp v0.49.0 // indirect
	go.opentelemetry.io/contrib/propagators/jaeger v1.24.0 // indirect
	go.opentelemetry.io/otel v1.24.0 // indirect
	go.opentelemetry.io/otel/exporters/otlp/otlptrace v1.24.0 // indirect
	go.opentelemetry.io/otel/exporters/otlp/otlptrace/otlptracegrpc v1.24.0 // indirect
	go.opentelemetry.io/otel/exporters/otlp/otlptrace/otlptracehttp v1.24.0 // indirect
	go.opentelemetry.io/otel/exporters/stdout/stdouttrace v1.24.0 // indirect
	go.opentelemetry.io/otel/exporters/zipkin v1.24.0 // indirect
	go.opentelemetry.io/otel/metric v1.24.0 // indirect
	go.opentelemetry.io/otel/sdk v1.24.0 // indirect
	go.opentelemetry.io/otel/trace v1.24.0 // indirect
	go.opentelemetry.io/proto/otlp v1.1.0 // indirect
	go.temporal.io/api v1.28.0 // indirect
	go.temporal.io/sdk v1.26.0-rc.3 // indirect
	go.temporal.io/sdk/contrib/opentelemetry v0.4.0 // indirect
	go.uber.org/multierr v1.11.0 // indirect
	golang.org/x/exp v0.0.0-20240222234643-814bf88cf225 // indirect
	golang.org/x/net v0.21.0 // indirect
	golang.org/x/sync v0.6.0 // indirect
	golang.org/x/sys v0.17.0 // indirect
	golang.org/x/text v0.14.0 // indirect
	golang.org/x/time v0.5.0 // indirect
	google.golang.org/genproto/googleapis/api v0.0.0-20240228224816-df926f6c8641 // indirect
	google.golang.org/genproto/googleapis/rpc v0.0.0-20240228224816-df926f6c8641 // indirect
	google.golang.org/grpc v1.62.0 // indirect
	google.golang.org/protobuf v1.32.0 // indirect
	gopkg.in/ini.v1 v1.67.0 // indirect
	gopkg.in/natefinch/lumberjack.v2 v2.2.1 // indirect
	gopkg.in/yaml.v3 v3.0.1 // indirect
)

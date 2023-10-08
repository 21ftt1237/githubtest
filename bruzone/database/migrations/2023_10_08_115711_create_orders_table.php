use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->decimal('price');
            $table->dateTime('ordered_datetime');
            $table->string('delivery_location');
            $table->dateTime('delivery_time');
            $table->dateTime('delivered_time')->nullable();
            $table->enum('delivery_status', ['complete', 'incomplete']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

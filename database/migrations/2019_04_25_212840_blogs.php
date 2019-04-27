<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->datetime('date')->nullable();
            $table->text('tag_line')->nullable();
            $table->text('user')->nullable();
            $table->longText('article')->nullable();
            $table->text('image')->nullable(); 
            $table->timestamps();
            $table->softDeletes(); 
        });
        DB::table('blogs')->insert(
        array(
            'title' => 'Progressive Weather Pattern This Week...',
            'date' => '2019-04-23 09:55:02',
            'tag_line' => 'Some Sun, Then Some Rain For The Northeast...',
            'user' => 'bmiller',
            'article' => '<p>The river of air located about 30,000 feet above our heads is still swiftly moving across the country from west to east. Also known as the jet stream, it is what drives weather systems around the globe.&nbsp; It begins slowing down this time of the year and especially as we look ahead to summer.&nbsp; However, this week the jet stream will be rather progressive keeping meteorologists on their toes.&nbsp; After a soaking rain across much of New England and Long Island on Monday, a fantastic day is in store for Tuesday with lots of sunshine and temperatures in the 60s and 70s.&nbsp; The dry weather will be short-lived because showers return to the forecast Tuesday night as a cold front sweeps towards the I-95 corridor.&nbsp; While it looks like rain amounts will be on the light side, there could even be a few rumbles of thunder.&nbsp; Behind the front, sunshine returns, but temperatures fall back to more seasonable readings for late April.&nbsp; Here is a look at forecast temperatures for 2 PM Wednesday.</p>
        <p><img src="https://www.weatherworksinc.com/sites/default/files/WEd(1).png" width="600" height="450" alt=""></p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Courtesy Pivotal Weather</strong></p>
        <p>Thursday will start out sunny, but clouds will be on the increase as we go through the afternoon.&nbsp; At the moment, it looks like it will be dry, but we can\'t rule out a few showers streaking across Pennsylvania and southern New York towards Thursday evening.&nbsp; Rain chances ramp up Thursday night into Friday as a developing area of low pressure heads for the Northeast.&nbsp; There are still some uncertainties as to the strength of this next system and how fast it moves through the region.&nbsp; Either way, it looks like it will be an unsettled finish to the work week.&nbsp; Here is a look at the simulated radar for Friday afternoon.</p>
        <p>&nbsp;<img src="https://www.weatherworksinc.com/sites/default/files/GFS fri(1).png" width="600" height="450" alt=""></p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Courtesy Tropical Tidbits</strong></p>
        <p>Beyond that, this progressive pattern should allow for a fast exit of Friday\'s storm.&nbsp; That should set the stage for a nice start to the weekend, but rain may return by Sunday.&nbsp; We\'ll have more on that and the rest of this weekend\'s forecast in Friday\'s blog.</p>',  
            'image' => 'https://www.weatherworksinc.com/sites/default/files/garden-107273__340.jpg' 

        )
        );

        DB::table('blogs')->insert(
            array(
                'title' => 'Progressive Weather Pattern This Week 2...',
                'date' => '2019-04-23 09:55:02',
                'tag_line' => 'Some Sun, Then Some Rain For The Northeast...',
                'user' => 'bmiller',
                'article' => '<p>The river of air located about 30,000 feet above our heads is still swiftly moving across the country from west to east. Also known as the jet stream, it is what drives weather systems around the globe.&nbsp; It begins slowing down this time of the year and especially as we look ahead to summer.&nbsp; However, this week the jet stream will be rather progressive keeping meteorologists on their toes.&nbsp; After a soaking rain across much of New England and Long Island on Monday, a fantastic day is in store for Tuesday with lots of sunshine and temperatures in the 60s and 70s.&nbsp; The dry weather will be short-lived because showers return to the forecast Tuesday night as a cold front sweeps towards the I-95 corridor.&nbsp; While it looks like rain amounts will be on the light side, there could even be a few rumbles of thunder.&nbsp; Behind the front, sunshine returns, but temperatures fall back to more seasonable readings for late April.&nbsp; Here is a look at forecast temperatures for 2 PM Wednesday.</p>
        <p><img src="https://www.weatherworksinc.com/sites/default/files/WEd(1).png" width="600" height="450" alt=""></p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Courtesy Pivotal Weather</strong></p>
        <p>Thursday will start out sunny, but clouds will be on the increase as we go through the afternoon.&nbsp; At the moment, it looks like it will be dry, but we can\'t rule out a few showers streaking across Pennsylvania and southern New York towards Thursday evening.&nbsp; Rain chances ramp up Thursday night into Friday as a developing area of low pressure heads for the Northeast.&nbsp; There are still some uncertainties as to the strength of this next system and how fast it moves through the region.&nbsp; Either way, it looks like it will be an unsettled finish to the work week.&nbsp; Here is a look at the simulated radar for Friday afternoon.</p>
        <p>&nbsp;<img src="https://www.weatherworksinc.com/sites/default/files/GFS fri(1).png" width="600" height="450" alt=""></p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Courtesy Tropical Tidbits</strong></p>
        <p>Beyond that, this progressive pattern should allow for a fast exit of Friday\'s storm.&nbsp; That should set the stage for a nice start to the weekend, but rain may return by Sunday.&nbsp; We\'ll have more on that and the rest of this weekend\'s forecast in Friday\'s blog.</p>',  
                'image' => 'https://www.weatherworksinc.com/sites/default/files/garden-107273__340.jpg' 

            )
            );

            DB::table('blogs')->insert(
                array(
                    'title' => 'Progressive Weather Pattern This Week 3...',
                    'date' => '2019-04-23 09:55:02',
                    'tag_line' => 'Some Sun, Then Some Rain For The Northeast...',
                    'user' => 'bmiller',
                    'article' => '<p>The river of air located about 30,000 feet above our heads is still swiftly moving across the country from west to east. Also known as the jet stream, it is what drives weather systems around the globe.&nbsp; It begins slowing down this time of the year and especially as we look ahead to summer.&nbsp; However, this week the jet stream will be rather progressive keeping meteorologists on their toes.&nbsp; After a soaking rain across much of New England and Long Island on Monday, a fantastic day is in store for Tuesday with lots of sunshine and temperatures in the 60s and 70s.&nbsp; The dry weather will be short-lived because showers return to the forecast Tuesday night as a cold front sweeps towards the I-95 corridor.&nbsp; While it looks like rain amounts will be on the light side, there could even be a few rumbles of thunder.&nbsp; Behind the front, sunshine returns, but temperatures fall back to more seasonable readings for late April.&nbsp; Here is a look at forecast temperatures for 2 PM Wednesday.</p>
            <p><img src="https://www.weatherworksinc.com/sites/default/files/WEd(1).png" width="600" height="450" alt=""></p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Courtesy Pivotal Weather</strong></p>
            <p>Thursday will start out sunny, but clouds will be on the increase as we go through the afternoon.&nbsp; At the moment, it looks like it will be dry, but we can\'t rule out a few showers streaking across Pennsylvania and southern New York towards Thursday evening.&nbsp; Rain chances ramp up Thursday night into Friday as a developing area of low pressure heads for the Northeast.&nbsp; There are still some uncertainties as to the strength of this next system and how fast it moves through the region.&nbsp; Either way, it looks like it will be an unsettled finish to the work week.&nbsp; Here is a look at the simulated radar for Friday afternoon.</p>
            <p>&nbsp;<img src="https://www.weatherworksinc.com/sites/default/files/GFS fri(1).png" width="600" height="450" alt=""></p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Courtesy Tropical Tidbits</strong></p>
            <p>Beyond that, this progressive pattern should allow for a fast exit of Friday\'s storm.&nbsp; That should set the stage for a nice start to the weekend, but rain may return by Sunday.&nbsp; We\'ll have more on that and the rest of this weekend\'s forecast in Friday\'s blog.</p>',  
                    'image' => 'https://www.weatherworksinc.com/sites/default/files/garden-107273__340.jpg' 

                )
                );

                DB::table('blogs')->insert(
                    array(
                        'title' => 'Progressive Weather Pattern This Week 4...',
                        'date' => '2019-04-23 09:55:02',
                        'tag_line' => 'Some Sun, Then Some Rain For The Northeast...',
                        'user' => 'bmiller',
                        'article' => '<p>The river of air located about 30,000 feet above our heads is still swiftly moving across the country from west to east. Also known as the jet stream, it is what drives weather systems around the globe.&nbsp; It begins slowing down this time of the year and especially as we look ahead to summer.&nbsp; However, this week the jet stream will be rather progressive keeping meteorologists on their toes.&nbsp; After a soaking rain across much of New England and Long Island on Monday, a fantastic day is in store for Tuesday with lots of sunshine and temperatures in the 60s and 70s.&nbsp; The dry weather will be short-lived because showers return to the forecast Tuesday night as a cold front sweeps towards the I-95 corridor.&nbsp; While it looks like rain amounts will be on the light side, there could even be a few rumbles of thunder.&nbsp; Behind the front, sunshine returns, but temperatures fall back to more seasonable readings for late April.&nbsp; Here is a look at forecast temperatures for 2 PM Wednesday.</p>
                <p><img src="https://www.weatherworksinc.com/sites/default/files/WEd(1).png" width="600" height="450" alt=""></p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Courtesy Pivotal Weather</strong></p>
                <p>Thursday will start out sunny, but clouds will be on the increase as we go through the afternoon.&nbsp; At the moment, it looks like it will be dry, but we can\'t rule out a few showers streaking across Pennsylvania and southern New York towards Thursday evening.&nbsp; Rain chances ramp up Thursday night into Friday as a developing area of low pressure heads for the Northeast.&nbsp; There are still some uncertainties as to the strength of this next system and how fast it moves through the region.&nbsp; Either way, it looks like it will be an unsettled finish to the work week.&nbsp; Here is a look at the simulated radar for Friday afternoon.</p>
                <p>&nbsp;<img src="https://www.weatherworksinc.com/sites/default/files/GFS fri(1).png" width="600" height="450" alt=""></p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Courtesy Tropical Tidbits</strong></p>
                <p>Beyond that, this progressive pattern should allow for a fast exit of Friday\'s storm.&nbsp; That should set the stage for a nice start to the weekend, but rain may return by Sunday.&nbsp; We\'ll have more on that and the rest of this weekend\'s forecast in Friday\'s blog.</p>',  
                        'image' => 'https://www.weatherworksinc.com/sites/default/files/garden-107273__340.jpg' 

                    )
                    );

                    DB::table('blogs')->insert(
                        array(
                            'title' => 'Progressive Weather Pattern This Week 5...',
                            'date' => '2019-04-23 09:55:02',
                            'tag_line' => 'Some Sun, Then Some Rain For The Northeast...',
                            'user' => 'bmiller',
                            'article' => '<p>The river of air located about 30,000 feet above our heads is still swiftly moving across the country from west to east. Also known as the jet stream, it is what drives weather systems around the globe.&nbsp; It begins slowing down this time of the year and especially as we look ahead to summer.&nbsp; However, this week the jet stream will be rather progressive keeping meteorologists on their toes.&nbsp; After a soaking rain across much of New England and Long Island on Monday, a fantastic day is in store for Tuesday with lots of sunshine and temperatures in the 60s and 70s.&nbsp; The dry weather will be short-lived because showers return to the forecast Tuesday night as a cold front sweeps towards the I-95 corridor.&nbsp; While it looks like rain amounts will be on the light side, there could even be a few rumbles of thunder.&nbsp; Behind the front, sunshine returns, but temperatures fall back to more seasonable readings for late April.&nbsp; Here is a look at forecast temperatures for 2 PM Wednesday.</p>
                    <p><img src="https://www.weatherworksinc.com/sites/default/files/WEd(1).png" width="600" height="450" alt=""></p>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Courtesy Pivotal Weather</strong></p>
                    <p>Thursday will start out sunny, but clouds will be on the increase as we go through the afternoon.&nbsp; At the moment, it looks like it will be dry, but we can\'t rule out a few showers streaking across Pennsylvania and southern New York towards Thursday evening.&nbsp; Rain chances ramp up Thursday night into Friday as a developing area of low pressure heads for the Northeast.&nbsp; There are still some uncertainties as to the strength of this next system and how fast it moves through the region.&nbsp; Either way, it looks like it will be an unsettled finish to the work week.&nbsp; Here is a look at the simulated radar for Friday afternoon.</p>
                    <p>&nbsp;<img src="https://www.weatherworksinc.com/sites/default/files/GFS fri(1).png" width="600" height="450" alt=""></p>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Courtesy Tropical Tidbits</strong></p>
                    <p>Beyond that, this progressive pattern should allow for a fast exit of Friday\'s storm.&nbsp; That should set the stage for a nice start to the weekend, but rain may return by Sunday.&nbsp; We\'ll have more on that and the rest of this weekend\'s forecast in Friday\'s blog.</p>',  
                            'image' => 'https://www.weatherworksinc.com/sites/default/files/garden-107273__340.jpg' 
            
                        )
                        );

                        DB::table('blogs')->insert(
                            array(
                                'title' => 'Progressive Weather Pattern This Week 6...',
                                'date' => '2019-04-23 09:55:02',
                                'tag_line' => 'Some Sun, Then Some Rain For The Northeast...',
                                'user' => 'bmiller',
                                'article' => '<p>The river of air located about 30,000 feet above our heads is still swiftly moving across the country from west to east. Also known as the jet stream, it is what drives weather systems around the globe.&nbsp; It begins slowing down this time of the year and especially as we look ahead to summer.&nbsp; However, this week the jet stream will be rather progressive keeping meteorologists on their toes.&nbsp; After a soaking rain across much of New England and Long Island on Monday, a fantastic day is in store for Tuesday with lots of sunshine and temperatures in the 60s and 70s.&nbsp; The dry weather will be short-lived because showers return to the forecast Tuesday night as a cold front sweeps towards the I-95 corridor.&nbsp; While it looks like rain amounts will be on the light side, there could even be a few rumbles of thunder.&nbsp; Behind the front, sunshine returns, but temperatures fall back to more seasonable readings for late April.&nbsp; Here is a look at forecast temperatures for 2 PM Wednesday.</p>
                        <p><img src="https://www.weatherworksinc.com/sites/default/files/WEd(1).png" width="600" height="450" alt=""></p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Courtesy Pivotal Weather</strong></p>
                        <p>Thursday will start out sunny, but clouds will be on the increase as we go through the afternoon.&nbsp; At the moment, it looks like it will be dry, but we can\'t rule out a few showers streaking across Pennsylvania and southern New York towards Thursday evening.&nbsp; Rain chances ramp up Thursday night into Friday as a developing area of low pressure heads for the Northeast.&nbsp; There are still some uncertainties as to the strength of this next system and how fast it moves through the region.&nbsp; Either way, it looks like it will be an unsettled finish to the work week.&nbsp; Here is a look at the simulated radar for Friday afternoon.</p>
                        <p>&nbsp;<img src="https://www.weatherworksinc.com/sites/default/files/GFS fri(1).png" width="600" height="450" alt=""></p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Courtesy Tropical Tidbits</strong></p>
                        <p>Beyond that, this progressive pattern should allow for a fast exit of Friday\'s storm.&nbsp; That should set the stage for a nice start to the weekend, but rain may return by Sunday.&nbsp; We\'ll have more on that and the rest of this weekend\'s forecast in Friday\'s blog.</p>',  
                                'image' => 'https://www.weatherworksinc.com/sites/default/files/garden-107273__340.jpg' 
                
                            )
                            );

                            DB::table('blogs')->insert(
                                array(
                                    'title' => 'Progressive Weather Pattern This Week 7...',
                                    'date' => '2019-04-23 09:55:02',
                                    'tag_line' => 'Some Sun, Then Some Rain For The Northeast...',
                                    'user' => 'bmiller',
                                    'article' => '<p>The river of air located about 30,000 feet above our heads is still swiftly moving across the country from west to east. Also known as the jet stream, it is what drives weather systems around the globe.&nbsp; It begins slowing down this time of the year and especially as we look ahead to summer.&nbsp; However, this week the jet stream will be rather progressive keeping meteorologists on their toes.&nbsp; After a soaking rain across much of New England and Long Island on Monday, a fantastic day is in store for Tuesday with lots of sunshine and temperatures in the 60s and 70s.&nbsp; The dry weather will be short-lived because showers return to the forecast Tuesday night as a cold front sweeps towards the I-95 corridor.&nbsp; While it looks like rain amounts will be on the light side, there could even be a few rumbles of thunder.&nbsp; Behind the front, sunshine returns, but temperatures fall back to more seasonable readings for late April.&nbsp; Here is a look at forecast temperatures for 2 PM Wednesday.</p>
                            <p><img src="https://www.weatherworksinc.com/sites/default/files/WEd(1).png" width="600" height="450" alt=""></p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Courtesy Pivotal Weather</strong></p>
                            <p>Thursday will start out sunny, but clouds will be on the increase as we go through the afternoon.&nbsp; At the moment, it looks like it will be dry, but we can\'t rule out a few showers streaking across Pennsylvania and southern New York towards Thursday evening.&nbsp; Rain chances ramp up Thursday night into Friday as a developing area of low pressure heads for the Northeast.&nbsp; There are still some uncertainties as to the strength of this next system and how fast it moves through the region.&nbsp; Either way, it looks like it will be an unsettled finish to the work week.&nbsp; Here is a look at the simulated radar for Friday afternoon.</p>
                            <p>&nbsp;<img src="https://www.weatherworksinc.com/sites/default/files/GFS fri(1).png" width="600" height="450" alt=""></p>
                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Courtesy Tropical Tidbits</strong></p>
                            <p>Beyond that, this progressive pattern should allow for a fast exit of Friday\'s storm.&nbsp; That should set the stage for a nice start to the weekend, but rain may return by Sunday.&nbsp; We\'ll have more on that and the rest of this weekend\'s forecast in Friday\'s blog.</p>',  
                                    'image' => 'https://www.weatherworksinc.com/sites/default/files/garden-107273__340.jpg' 
                    
                                )
                                );

        DB::table('blogs')->insert(
        array(
            'title' => 'Progressive Weather Pattern This Week 8...',
            'date' => '2019-04-23 09:55:02',
            'tag_line' => 'Some Sun, Then Some Rain For The Northeast...',
            'user' => 'bmiller',
            'article' => '<p>The river of air located about 30,000 feet above our heads is still swiftly moving across the country from west to east. Also known as the jet stream, it is what drives weather systems around the globe.&nbsp; It begins slowing down this time of the year and especially as we look ahead to summer.&nbsp; However, this week the jet stream will be rather progressive keeping meteorologists on their toes.&nbsp; After a soaking rain across much of New England and Long Island on Monday, a fantastic day is in store for Tuesday with lots of sunshine and temperatures in the 60s and 70s.&nbsp; The dry weather will be short-lived because showers return to the forecast Tuesday night as a cold front sweeps towards the I-95 corridor.&nbsp; While it looks like rain amounts will be on the light side, there could even be a few rumbles of thunder.&nbsp; Behind the front, sunshine returns, but temperatures fall back to more seasonable readings for late April.&nbsp; Here is a look at forecast temperatures for 2 PM Wednesday.</p>
        <p><img src="https://www.weatherworksinc.com/sites/default/files/WEd(1).png" width="600" height="450" alt=""></p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Courtesy Pivotal Weather</strong></p>
        <p>Thursday will start out sunny, but clouds will be on the increase as we go through the afternoon.&nbsp; At the moment, it looks like it will be dry, but we can\'t rule out a few showers streaking across Pennsylvania and southern New York towards Thursday evening.&nbsp; Rain chances ramp up Thursday night into Friday as a developing area of low pressure heads for the Northeast.&nbsp; There are still some uncertainties as to the strength of this next system and how fast it moves through the region.&nbsp; Either way, it looks like it will be an unsettled finish to the work week.&nbsp; Here is a look at the simulated radar for Friday afternoon.</p>
        <p>&nbsp;<img src="https://www.weatherworksinc.com/sites/default/files/GFS fri(1).png" width="600" height="450" alt=""></p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Courtesy Tropical Tidbits</strong></p>
        <p>Beyond that, this progressive pattern should allow for a fast exit of Friday\'s storm.&nbsp; That should set the stage for a nice start to the weekend, but rain may return by Sunday.&nbsp; We\'ll have more on that and the rest of this weekend\'s forecast in Friday\'s blog.</p>',  
            'image' => 'https://www.weatherworksinc.com/sites/default/files/garden-107273__340.jpg' 

        )
        );

          

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

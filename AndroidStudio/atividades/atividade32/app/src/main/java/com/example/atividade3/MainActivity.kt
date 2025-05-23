package com.example.atividade3
import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp



class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Myapp()
        }
    }
}
@Composable
fun Myapp(){
    var scoreCounterA by remember{ mutableStateOf(0)}
    var scoreCounterB by remember { mutableStateOf(0) }

    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color(0xFF546E7A)
    ){
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ){
            Text(text = "Time cuiaba Fc",
                style = TextStyle(
                    color = Color.Green,
                    fontSize = 39.sp)
            )
            Text(text = "$scoreCounterA",
                style = TextStyle(
                    color = Color.Green,
                    fontSize = 39.sp)
            )
            Spacer(modifier = Modifier.height(15.dp))
            CreateCircleA(scoreCounterA) {
                scoreCounterA+=1
            }
            Spacer(modifier = Modifier.height(40.dp))

            Text(text = "Time paysandu",
                style = TextStyle(
                    color = Color.Green,
                    fontSize = 39.sp)
            )
            Text(text = "$scoreCounterB",
                style = TextStyle(
                    color = Color.Green,
                    fontSize = 39.sp)
            )
            Spacer(modifier = Modifier.height(15.dp))
            CreateCircleB (scoreCounterB) {
                scoreCounterB+=1
            }
        }
    }
}


@Composable
fun CreateCircleA(scoreCounterA : Int, onTap:() ->Unit) {

    Card(
        modifier = Modifier
            .padding(10.dp)
            .size(200.dp)
            .clickable {
                onTap()
                Log.d("Contador", "Contador: $scoreCounterA")
            },
        shape = CircleShape
    ) {
        Box(modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center,) {
            Text(text = "Add")
        }

    }
}
@Composable
fun CreateCircleB(scoreCounterB : Int, onTap:() ->Unit) {

    Card(
        modifier = Modifier
            .padding(10.dp)
            .size(200.dp)
            .clickable {
                onTap()
                Log.d("Contador", "Contador: $scoreCounterB")
            },
        shape = CircleShape
    ) {
        Box(modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center,) {
            Text(text = "Add")
        }
    }
}
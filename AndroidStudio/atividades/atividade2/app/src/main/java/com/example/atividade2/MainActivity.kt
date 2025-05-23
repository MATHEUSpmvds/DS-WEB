package com.example.atividade2

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.*
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade2.ui.theme.Atividade2Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade2Theme {
                MyApp()
            }
        }
    }
}

@Composable
fun MyApp() {


    Surface(
        modifier = Modifier
            .fillMaxSize(),
        color = Color(0xFF546E7A)
    ) {
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally,
            modifier = Modifier.fillMaxSize()
        ) {
            Text(
                text = "Produto: fone red dragon",
                style = TextStyle(color = Color.Black, fontSize = 28.sp)
            )

            Text(
                text = "Preço: R$100,00",
                style = TextStyle(color = Color.Black, fontSize = 24.sp)
            )

            Spacer(modifier = Modifier.height(32.dp))



            Botaocompra()


        }
    }
}

@Composable
fun Botaocompra() {
    Card(
        modifier = Modifier.size(100.dp),
        shape = CircleShape
    ) {
        Box(
            modifier = Modifier.fillMaxSize(),
            contentAlignment = Alignment.Center
        ) {
            Text(
                text = "Comprar",
                color = Color.Blue,
                fontSize = 20.sp
            )
        }
    }
}

@Preview(showBackground = true)
@Composable
fun GreetingPreview() {
    Atividade2Theme {
        MyApp()
    }
}
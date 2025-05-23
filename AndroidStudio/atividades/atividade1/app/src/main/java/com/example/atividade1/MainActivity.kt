package com.example.atividade1

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.background
import androidx.compose.foundation.layout.*
import androidx.compose.material3.*
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            MaterialTheme {
                CartoesDeContato()
            }
        }
    }
}

@Composable
fun CartoesDeContato() {
    Column(
        modifier = Modifier
            .fillMaxSize()
            .background(Color(0xFFE0F7FA))
            .padding(16.dp),
        verticalArrangement = Arrangement.Center,
        horizontalAlignment = Alignment.CenterHorizontally
    ) {
        ContatoCard("Matheus maciel", "(11) 18933-48334", "matheusmaciel@email.com")
        Spacer(modifier = Modifier.height(16.dp))
        ContatoCard("vinicius alves", "(21) 12233-4754", "vinicius@email.com")
    }
}

@Composable
fun ContatoCard(nome: String, telefone: String, email: String) {
    Card(
        modifier = Modifier
            .fillMaxWidth(0.85f),
        colors = CardDefaults.cardColors(
            containerColor = Color.White
        ),
        elevation = CardDefaults.cardElevation(defaultElevation = 4.dp)
    ) {
        Column(
            modifier = Modifier.padding(16.dp),
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text("Nome: $nome", fontSize = 18.sp)
            Text("Telefone: $telefone", fontSize = 16.sp)
            Text("Email: $email", fontSize = 16.sp)
        }
    }
}

@Preview(showBackground = true)
@Composable
fun CartoesDeContatoPreview() {
    MaterialTheme {
        CartoesDeContato()
    }
}
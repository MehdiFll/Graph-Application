library("igraph");
N <- as.matrix(read.csv("matrix.csv",sep=";",header = FALSE),directed=TRUE);
g <- graph.adjacency(N, mode = "directed",weighted=TRUE);
res<-mst(g);
sink("mst.txt");
print(res);
sink()
png("mst.png");
plot(res,vertex.color="lightblue");
dev.off()